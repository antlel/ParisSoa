<?php
namespace Service\Models;


class GambleType{
    private $idGambleType;
    private $GambleTypeName;

    function __construct($idGambleType, $GambleTypeName)
    {
        $this->idGambleType = $idGambleType;
        $this->GambleTypeName = $GambleTypeName;
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

    /**
     * @return mixed
     */
    public function getGambleTypeName()
    {
        return $this->GambleTypeName;
    }

    /**
     * @param mixed $GambleTypeName
     */
    public function setGambleTypeName($GambleTypeName)
    {
        $this->GambleTypeName = $GambleTypeName;
    }
}