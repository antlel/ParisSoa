<?php

class Matchs{
    private $idMatch;
    private $date;
    private $idTeamA;
    private $idTeamB;
    private $ScoreA;
    private $ScoreB;

    function __construct($idMatch, $date, $idTeamA, $idTeamB)
    {
        $this->idMatch = $idMatch;
        $this->date = $date;
        $this->idTeamA = $idTeamA;
        $this->idTeamB = $idTeamB;
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