<?php
namespace Service\Models;

use Service\Common\ArraySerializable;

class User implements ArraySerializable, \JsonSerializable {
    private $idUser;
    private $name;
    private $lastname;
    private $pseudo;
    private $birthDate;
    private $password;
    private $email;
    private $token;
    private $admin;

    function __construct($idUser = NULL, $name = NULL, $lastname = NULL, $pseudo = NULL, $birthDate = NULL, $password = NULL, $email = NULL, $admin = NULL)
    {
        $this->idUser = $idUser;
        $this->name = $name;
        $this->lastname = $lastname;
        $this->pseudo = $pseudo;
        $this->birthDate = $birthDate;
        $this->password = $password;
        $this->email = $email;
        $this->admin = $admin;
    }

    public static function fromArray($array)
    {
        $entity = new User();


        if (isset($array["idUser"]))
        {
            $entity->idUser = (int)$array["idUser"];
        }

        if (isset($array["name"]))
        {
            $entity->name = $array["name"];
        }

        if (isset($array["lastname"]))
        {
            $entity->lastname = $array["lastname"];
        }

        if (isset($array["pseudo"]))
        {
            $entity->pseudo = $array["pseudo"];
        }

        if (isset($array["birthDate"]))
        {
            $entity->birthDate = new \DateTime($array["birthDate"]);
        }

        if (isset($array["password"]))
        {
            $entity->password = $array["password"];
        }

        if (isset($array["email"]))
        {
            $entity->email = $array["email"];
        }

        if (isset($array["token"]))
        {
            $entity->token = $array["token"];
        }

        if (isset($array["admin"]))
        {
            $entity->admin = (int)$array["admin"];
        }

        return $entity;
    }

    public function toArray()
    {
        return array(
            "idUser" => $this->idUser,
            "name" => $this->name,
            "lastname" => $this->lastname,
            "pseudo" => $this->pseudo,
            "birthDate" => $this->birthDate,
            "password" => $this->password,
            "email" => $this->email,
            "token" => $this->token,
            "admin" => $this->admin
        );
    }

    public function jsonSerialize()
    {
        return $this->toArray();
    }

    /**
     * @return mixed
     */
    public function getIdUser()
    {
        return $this->idUser;
    }

    /**
     * @param mixed $iduser
     */
    public function setIdUser($idUser)
    {
        $this->idUser = $idUser;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * @param mixed $lastname
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
    }

    /**
     * @return mixed
     */
    public function getPseudo()
    {
        return $this->pseudo;
    }

    /**
     * @param mixed $pseudo
     */
    public function setPseudo($pseudo)
    {
        $this->pseudo = $pseudo;
    }

    /**
     * @return mixed
     */
    public function getBirthDate()
    {
        return $this->birthDate;
    }

    /**
     * @param mixed $birthDate
     */
    public function setBirthDate($birthDate)
    {
        $this->birthDate = $birthDate;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * @param mixed $token
     */
    public function setToken($token)
    {
        $this->token = $token;
    }

    /**
     * @return mixed
     */
    public function getAdmin()
    {
        return $this->admin;
    }

    /**
     * @param mixed $admin
     */
    public function setAdmin($admin)
    {
        $this->admin = $admin;
    }


}
