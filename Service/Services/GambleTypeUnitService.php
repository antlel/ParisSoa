<?php
/**
 * Created by PhpStorm.
 * User: anthony
 * Date: 15/04/2016
 * Time: 11:42
 */

namespace Service\Services;

use Service\Models\GambleType;
use Service\DataAccess\DBContext;

class GambleTypeUnitService implements IUnitService
{
    const READ_ALL_USER = "SELECT * FROM gambletype";
    const CREATE_USER = "INSERT INTO gambletype (GambleTypeName) VALUES (?)";
    const READ_USER = "SELECT * FROM gambletype WHERE idGambleType = ?";
    const UPDATE_USER = "UPDATE gambletype SET GambleTypeName = ? WHERE idGambleType = ?";
    const DELETE_USER = "DELETE FROM gambletype WHERE idGambleType = ?";

    public function Create($object)
    {
        $dbContext = DBContext::getInstance();

        $dbContext->execute(self::CREATE_USER, array(
            $object->getGambleTypeName()
        ));
    }

    public function Read($id = NULL)
    {
        $dbContext = DBContext::getInstance();

        if (isset($id)) {
            $objectArray = $dbContext->getOne(self::READ_USER, $id);
            return $this->CreateObjectFromArray($objectArray);

        } else {
            $objectsArray = $dbContext->getAll(self::READ_ALL_USER);

            $resultArray = array();

            foreach ($objectsArray as $objectArray) {
                array_push($resultArray, $this->CreateObjectFromArray($objectArray));
            }

            return $resultArray;
        }
    }

    public function Update($object)
    {
        // TODO: Implement Update() method.
    }

    public function Delete($id)
    {
        // TODO: Implement Delete() method.
    }

    private function CreateObjectFromArray($array)
    {
        // TODO: Implement CreateObjectFromArray() method.
    }
}
