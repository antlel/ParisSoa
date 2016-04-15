<?php
namespace Service\Models;

use Service\Common\ArraySerializable;

class Team implements ArraySerializable 
{
    private $idTeam;
    private $TeamName;

    public function __construct($idTeam = NULL, $TeamName = NULL)
    {
        $this->idTeam = $idTeam;
        $this->TeamName = $TeamName;
    }

    public static function fromArray($array)
    {
        $entity = new Team();

        if (isset($array["idTeam"]))
        {
            $entity->idTeam = (int)$array["idTeam"];
        }

        if (isset($array["TeamName"]))
        {
            $entity->TeamName = $array["TeamName"];
        }

        return $entity;
    }

    public function toArray()
    {
        return array(
            "idTeam" => $this->idTeam,
            "TeamName" => $this->TeamName
        );
    }

    /**
     * @return mixed
     */
    public function getIdTeam()
    {
        return $this->idTeam;
    }

    /**
     * @param mixed $idTeam
     */
    public function setIdTeam($idTeam)
    {
        $this->idTeam = $idTeam;
    }

    /**
     * @return mixed
     */
    public function getTeamName()
    {
        return $this->TeamName;
    }

    /**
     * @param mixed $TeamName
     */
    public function setTeamName($TeamName)
    {
        $this->TeamName = $TeamName;
    }
}
