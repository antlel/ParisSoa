<?php

class Gamble{
    private $idGamble;
    private $scoreA;
    private $scoreB;
    private $date;
    private $idUser;
    private $idMatch;
    private $idGambleType;

    function __construct($idGamble, $scoreA, $scoreB, $date, $idUser, $idMatch, $idGambleType)
    {
        $this->idGamble = $idGamble;
        $this->scoreA = $scoreA;
        $this->scoreB = $scoreB;
        $this->date = $date;
        $this->idUser = $idUser;
        $this->idMatch = $idMatch;
        $this->idGambleType = $idGambleType;
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