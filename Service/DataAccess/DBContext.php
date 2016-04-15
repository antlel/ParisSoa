<?php
namespace Service\DataAccess;

/**
 * Contexte de base de données
 */
class DBContext
{
    const DATABASE_DRIVER = "mysql";
    const DATABASE_ADDRESS = "127.0.0.1";
    const DATABASE_PORT = "3306";
    const DATABASE_NAME = "euro2016";
    const DATABASE_USERNAME = "root";
    const DATABASE_PASSWORD = "";


    private static $instance;

    // The singleton method
    public static function getInstance()
    {
        if (!isset(self::$instance)) {
            self::$instance = new DBContext;
        }
        return self::$instance;
    }

    private function __construct()
    {
        try {
            $this->dbo = new DBO($this->getConnectionString(), self::DATABASE_USERNAME, self::DATABASE_PASSWORD);
        } catch (PDOException $e) {
            throw $e;
        }

    }

    private function getConnectionString()
    {
        return vsprintf("/%s:host=%s;port=%s;dbname=%s;", array(
            self::DATABASE_DRIVER,
            self::DATABASE_ADDRESS,
            self::DATABASE_PORT,
            self::DATABASE_NAME
        ));
    }

    public function execute($sqlRequest, $args = array())
    {
        $this->dbo->beginTransaction();

        try {
            $statementHandler =  $this->dbo->prepare($sqlRequest);
            $statementHandler->execute($args);

        } catch (PDOException $e) {
            $this->dbo->rollBack();
            throw $e;

        } finally {
            $this->dbo->commit();
        }

    }

    public function getOne($sqlRequest, $args = array())
    {
        $result = null;
        try {
            $statementHandler =  $this->dbo->prepare($sqlRequest);
            $statementHandler->execute($args);

            $result = $statementHandler->fetch(PDO::FETCH_ASSOC);

        } catch (PDOException $e) {
            throw $e;

        }

        return $result;
    }

    public function getAll($sqlRequest, $args = array())
    {
        $result = null;
        try {
            $statementHandler =  $this->dbo->prepare($sqlRequest);
            $statementHandler->execute($args);

            $result = $statementHandler->fetchAll(PDO::FETCH_ASSOC);

        } catch (PDOException $e) {
            throw $e;

        }

        return $result;
    }

    private $dbo;
}
