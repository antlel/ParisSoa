<?php
namespace Service\Models;

use Service\Common\ArraySerializable;

class GambleType implements ArraySerializable, \JsonSerializable {
    private $idGambleType;
    private $GambleTypeName;

    public function __construct($idGambleType = NULL, $GambleTypeName = NULL)
    {
        $this->idGambleType = $idGambleType;
        $this->GambleTypeName = $GambleTypeName;
    }

    public static function fromArray($array)
    {
        $entity = new GambleType();

        if (isset($array["idGambleType"]))
        {
            $entity->idGambleType = (int)$array["idGambleType"];
        }

        if (isset($array["GambleTypeName"]))
        {
            $entity->GambleTypeName = $array["GambleTypeName"];
        }

        return $entity;
    }

    public function toArray()
    {
        return array(
            "idGambleType" => $this->idGambleType,
            "GambleTypeName" => $this->GambleTypeName
        );
    }

    public function jsonSerialize()
    {
        return $this->toArray();
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
