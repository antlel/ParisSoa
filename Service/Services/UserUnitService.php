<?php
/**
 * Created by PhpStorm.
 * User: anthony
 * Date: 15/04/2016
 * Time: 11:42
 */

namespace Service\Services;

use Service\Models\User;
use Service\DataAccess\DBContext;

class UserUnitService implements IUnitService
{
    const READ_ALL_USER = "SELECT * FROM user";
    const CREATE_USER = "INSERT INTO user (name, lastname, pseudo, birthDate, password, email, token, admin) VALUES (?)";
    const READ_USER = "SELECT * FROM user WHERE idUser = ?";
    const UPDATE_USER = "UPDATE user SET name = ?, lastname = ?, pseudo = ?, birthDate = ?, password = ?, email = ?, token = ?, admin = ? WHERE idUser = ?";
    const DELETE_USER = "DELETE FROM user WHERE idUser = ?";

    public function Create($object)
    {
        $dbContext = DBContext::getInstance();

        $dbContext->execute(self::CREATE_USER, array(
            $object->getName(),$object->getLastname(),$object->getPseudo(),$object->getBirthDate(),$object->getPassword(),$object->getEmail(),null,0
        ));
    }

    public function Read($id = NULL)
    {
        $dbContext = DBContext::getInstance();

        if (isset($id)) {
            $objectArray = $dbContext->getOne(self::READ_USER, $id);
            return User::fromArray($objectArray);

        } else {
            $objectsArray = $dbContext->getAll(self::READ_ALL_USER);

            $resultArray = array();

            foreach ($objectsArray as $objectArray) {
                array_push($resultArray, User::fromArray($objectArray));
            }

            return $resultArray;
        }
    }

    public function Update($object)
    {
        $dbContext = DBContext::getInstance();

        $dbContext->execute(self::UPDATE_USER, array(
            $object->getName(),
            $object->getLastname(),
            $object->getPseudo(),
            $object->getBirthDate(),
            $object->getPassword(),
            $object->getEmail(),
            $object->getToken(),
            $object->getAdmin() ,
            $object->getIduser()
        ));
    }

    public function Delete($id)
    {
        $dbContext = DBContext::getInstance();

        $dbContext->execute(self::DELETE_USER, array($id));
    }
}
