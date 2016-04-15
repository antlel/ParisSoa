<?php
/**
 * Created by PhpStorm.
 * User: anthony
 * Date: 15/04/2016
 * Time: 11:41
 */

namespace Service\Services;


class GambleUnitService implements IUnitService{

    const READ_ALL_GAMBLE_TYPE = "SELECT * FROM Gamble";
    const CREATE_GAMBLE_TYPE = "INSERT INTO gamble (scoreA, scoreB, date, idUser, idMatch, idGambleType) VALUES (?)";
    const READ_GAMBLE_TYPE = "SELECT * FROM gamble WHERE idGambleType = ?";
    const UPDATE_GAMBLE_TYPE = "UPDATE gamble SET scoreA, scoreB, date, idUser, idMatch, idGambleType WHERE idGamble = ?";
    const DELETE_GAMBLE_TYPE = "DELETE FROM gamble WHERE idGamble = ?";

    public function Create($object)
    {
        $dbContext = DBContext::getInstance();

        $dbContext->execute(self::CREATE_GAMBLE_TYPE, array(
            $object->getGambleName()
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
            $object->getGambleName(), $object->getIdGamble()
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