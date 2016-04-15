<?php
namespace Service\Models;

use Service\Common\ArraySerializable;

class Match implements ArraySerializable, \JsonSerializable {
    private $idMatch;
    private $date;
    private $idTeamA;
    private $idTeamB;
    private $ScoreA;
    private $ScoreB;

    public function __construct($idMatch = NULL, $date = NULL, $idTeamA = NULL, $idTeamB = NULL)
    {
        $this->idMatch = $idMatch;
        $this->date = $date;
        $this->idTeamA = $idTeamA;
        $this->idTeamB = $idTeamB;
    }

    public static function fromArray($array)
    {
        $entity = new Match();

        if (isset($array["idMatch"]))
        {
            $entity->idMatch = (int)$array["idMatch"];
        }

        if (isset($array["date"]))
        {
            $entity->date = new \DateTime($array["date"]);
        }

        if (isset($array["idTeamA"]))
        {
            $entity->idTeamA = (int)$array["idTeamA"];
        }

        if (isset($array["idTeamB"]))
        {
            $entity->idTeamB = (int)$array["idTeamB"];
        }

        return $entity;
    }

    public function toArray()
    {
        return array(
            "idMatch" => $this->idMatch,
            "date" => $this->date,
            "idTeamA" => $this->idTeamA,
            "idTeamB" => $this->idTeamB
        );
    }

    public function jsonSerialize()
    {
        return $this->toArray();
    }

    /**
     * @return mixed
     */
    public function getIdMatch()
    {
        return $this->idMatch;
    }

    /**
     * @param mixed $idMatch
     */
    public function setIdMatch($idMatch)
    {
        $this->idMatch = $idMatch;
    }

    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param mixed $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }

    /**
     * @return mixed
     */
    public function getIdTeamA()
    {
        return $this->idTeamA;
    }

    /**
     * @param mixed $idTeamA
     */
    public function setIdTeamA($idTeamA)
    {
        $this->idTeamA = $idTeamA;
    }

    /**
     * @return mixed
     */
    public function getIdTeamB()
    {
        return $this->idTeamB;
    }

    /**
     * @param mixed $idTeamB
     */
    public function setIdTeamB($idTeamB)
    {
        $this->idTeamB = $idTeamB;
    }

    /**
     * @return mixed
     */
    public function getScoreA()
    {
        return $this->ScoreA;
    }

    /**
     * @param mixed $ScoreA
     */
    public function setScoreA($ScoreA)
    {
        $this->ScoreA = $ScoreA;
    }

    /**
     * @return mixed
     */
    public function getScoreB()
    {
        return $this->ScoreB;
    }

    /**
     * @param mixed $ScoreB
     */
    public function setScoreB($ScoreB)
    {
        $this->ScoreB = $ScoreB;
    }



}
