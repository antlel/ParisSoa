<?php
namespace Service\Models;

use Service\Common\ArraySerializable;

class Gamble implements ArraySerializable, \JsonSerializable {
    private $idGamble;
    private $scoreA;
    private $scoreB;
    private $date;
    private $idUser;
    private $idMatch;
    private $idGambleType;

    public function __construct($idGamble = NULL, $scoreA = NULL, $scoreB = NULL, $date = NULL, $idUser = NULL, $idMatch = NULL, $idGambleType = NULL)
    {
        $this->idGamble = $idGamble;
        $this->scoreA = $scoreA;
        $this->scoreB = $scoreB;
        $this->date = $date;
        $this->idUser = $idUser;
        $this->idMatch = $idMatch;
        $this->idGambleType = $idGambleType;
    }

    public static function fromArray($array)
    {
        $entity = new Gamble();

        if (isset($array["idGamble"]))
        {
            $entity->idGamble = (int)$array["idGamble"];
        }

        if (isset($array["scoreA"]))
        {
            $entity->scoreA = (int)$array["scoreA"];
        }

        if (isset($array["scoreB"]))
        {
            $entity->scoreB = (int)$array["scoreB"];
        }

        if (isset($array["date"]))
        {
            $entity->date = new \DateTime($array["date"]);
        }

        if (isset($array["idUser"]))
        {
            $entity->idUser = (int)$array["idUser"];
        }

        if (isset($array["idMatch"]))
        {
            $entity->idMatch = (int)$array["idMatch"];
        }

        if (isset($array["idGambleType"]))
        {
            $entity->idGambleType = (int)$array["idGambleType"];
        }

        return $entity;
    }

    public function toArray()
    {
        return array(
            "idGamble" => $this->idGamble,
            "scoreA" => $this->scoreA,
            "scoreB" => $this->scoreB,
            "date" => $this->date,
            "idUser" => $this->idUser,
            "idMatch" => $this->idMatch,
            "idGambleType" => $this->idGambleType
        );
    }

    public function jsonSerialize()
    {
        return $this->toArray();
    }

    /**
     * @return mixed
     */
    public function getIdGamble()
    {
        return $this->idGamble;
    }

    /**
     * @param mixed $idGamble
     */
    public function setIdGamble($idGamble)
    {
        $this->idGamble = $idGamble;
    }

    /**
     * @return mixed
     */
    public function getScoreA()
    {
        return $this->scoreA;
    }

    /**
     * @param mixed $scoreA
     */
    public function setScoreA($scoreA)
    {
        $this->scoreA = $scoreA;
    }

    /**
     * @return mixed
     */
    public function getScoreB()
    {
        return $this->scoreB;
    }

    /**
     * @param mixed $scoreB
     */
    public function setScoreB($scoreB)
    {
        $this->scoreB = $scoreB;
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
    public function getIdUser()
    {
        return $this->idUser;
    }

    /**
     * @param mixed $idUser
     */
    public function setIdUser($idUser)
    {
        $this->idUser = $idUser;
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
    public function getIdGambleType()
    {
        return $this->idGambleType;
    }

    /**
     * @param mixed $idGambleType
     */
    public function setIdGambleType($idGambleType)
    {
        $this->idGambleType = $idGambleType;
    }

}
