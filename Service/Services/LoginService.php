<?php
/**
 * Created by PhpStorm.
 * User: anthony
 * Date: 15/04/2016
 * Time: 11:26
 */

namespace Service\Services;

use Service\Models\User;
use Service\DataAccess\DBContext;


class LoginService {

    const GET_USER_WITH_PSEUDO = "SELECT * FROM user WHERE pseudo = ?";

    public function LogUser($pseudo, $password){
        $user = $this->getUserByPseudo($pseudo);

        if($user->getPassword() == $password){
            return $user;
        }else{
            return null;
        }

        return $user;
    }

    private function getUserByPseudo($pseudo){

        $pseudo = array($pseudo);
        $dbContext = DBContext::getInstance();
        $objectArray = array();
        try{
            $objectArray = $dbContext->getOne(self::GET_USER_WITH_PSEUDO, $pseudo);
        }catch (\PDOException $e){

        }

        return User::fromArray($objectArray);
    }
}