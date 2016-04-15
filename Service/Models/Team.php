<?php
namespace Service\Models;


class Team {
    private $idTeam;
    private $TeamName;

    function __construct($idTeam, $TeamName)
    {
        $this->idTeam = $idTeam;
        $this->TeamName = $TeamName;
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
