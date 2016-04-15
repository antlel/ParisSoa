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
    const READ_ALL_GAMBLE_TYPE = "SELECT * FROM gambletype";
    const CREATE_GAMBLE_TYPE = "INSERT INTO gambletype (GambleTypeName) VALUES (?)";
    const READ_GAMBLE_TYPE = "SELECT * FROM gambletype WHERE idGambleType = ?";
    const UPDATE_GAMBLE_TYPE = "UPDATE gambletype SET GambleTypeName = ? WHERE idGambleType = ?";
    const DELETE_GAMBLE_TYPE = "DELETE FROM gambletype WHERE idGambleType = ?";

    public function Create($object)
    {
        $dbContext = DBContext::getInstance();

        $dbContext->execute(self::CREATE_GAMBLE_TYPE, array(
            $object->getGambleTypeName()
        ));
    }

    public function Read($id = NULL)
    {
        $dbContext = DBContext::getInstance();

        if (isset($id)) {
            $objectArray = $dbContext->getOne(self::READ_GAMBLE_TYPE, $id);
            return $this->CreateObjectFromArray($objectArray);

        } else {
            $objectsArray = $dbContext->getAll(self::READ_ALL_GAMBLE_TYPE);

            $resultArray = array();

            foreach ($objectsArray as $objectArray) {
                array_push($resultArray, $this->CreateObjectFromArray($objectArray));
            }

            return $resultArray;
        }
    }

    public function Update($object)
    {
        $dbContext = DBContext::getInstance();

        $dbContext->execute(self::UPDATE_GAMBLE_TYPE, array(
            $object->getGambleTypeName(), $object->getIdGambleType()
        ));
    }

    public function Delete($id)
    {
        $dbContext = DBContext::getInstance();

        $dbContext->execute(self::UPDATE_GAMBLE_TYPE, array(
            $id
        ));
    }
}
