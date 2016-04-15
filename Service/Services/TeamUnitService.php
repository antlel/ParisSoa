<?php
/**
 * Created by PhpStorm.
 * User: anthony
 * Date: 15/04/2016
 * Time: 11:42
 */

namespace Service\Services;

use Service\Models\Team;
use Service\DataAccess\DBContext;

class TeamUnitService implements IUnitService
{
    const READ_ALL_TEAM = "SELECT * FROM team";
    const CREATE_TEAM = "INSERT INTO team (TeamName) VALUES (?)";
    const READ_TEAM = "SELECT * FROM team WHERE idTeam = ?";
    const UPDATE_TEAM = "UPDATE team SET TeamName = ? WHERE idTeam = ?";
    const DELETE_TEAM = "DELETE FROM team WHERE idTeam = ?";

    public function Create($object)
    {
        $dbContext = DBContext::getInstance();

        $dbContext->execute(self::CREATE_TEAM, array(
            $object->getTeamName()
        ));
    }

    public function Read($id = NULL)
    {
        $dbContext = DBContext::getInstance();

        if (isset($id)) {
            $objectArray = $dbContext->getOne(self::READ_TEAM, $id);
            return $this->CreateObjectFromArray($objectArray);

        } else {
            $objectsArray = $dbContext->getAll(self::READ_ALL_TEAM);

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

        $dbContext->execute(self::UPDATE_TEAM, array(
            $object->getTeamName(), $object->getIdTeam()
        ));
    }

    public function Delete($id)
    {
        $dbContext = DBContext::getInstance();

        $dbContext->execute(self::DELETE_TEAM, array(
            $id
        ));
    }
}
