<?php
/**
 * Created by PhpStorm.
 * User: anthony
 * Date: 15/04/2016
 * Time: 11:42
 */

namespace Service\Services;

use Service\Models\Match;
use Service\DataAccess\DBContext;

class MatchUnitService implements IUnitService
{
    const READ_ALL_MATCH = "SELECT * FROM match";
    const CREATE_MATCH = "INSERT INTO match (date, idTeamA, idTeamB, scoreA, scoreB) VALUES (?)";
    const READ_MATCH = "SELECT * FROM match WHERE idMatch = ?";
    const UPDATE_MATCH = "UPDATE match SET date = ?, idTeamA = ?, idTeamB = ?, scoreA = ?, scoreB = ? WHERE idMatch = ?";
    const DELETE_MATCH = "DELETE FROM match WHERE idMatch = ?";

    public function Create($object)
    {
        $dbContext = DBContext::getInstance();

        $dbContext->execute(self::CREATE_MATCH, array(
            $object->getDate(), $object->getIdTeamA(), $object->getIdTeamA(), $object->getScoreA(), $object->getScoreA()
        ));
    }

    public function Read($id = NULL)
    {
        $dbContext = DBContext::getInstance();

        if (isset($id)) {
            $objectArray = $dbContext->getOne(self::READ_MATCH, $id);
            return $this->CreateObjectFromArray($objectArray);

        } else {
            $objectsArray = $dbContext->getAll(self::READ_ALL_MATCH);

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

        $dbContext->execute(self::UPDATE_MATCH, array(
            $object->getDate(), $object->getIdTeamA(), $object->getIdTeamA(), $object->getScoreA(), $object->getScoreA(),  $object->getIdMatch()
        ));
    }

    public function Delete($id)
    {
        $dbContext = DBContext::getInstance();

        $dbContext->execute(self::DELETE_MATCH, array(
            $id
        ));
    }
}
