<?php
/**
 * Created by PhpStorm.
 * User: anthony
 * Date: 15/04/2016
 * Time: 11:10
 */

namespace Service\Controllers;
use Service\Services\LoginService;

class LoginController extends BaseController{

    public function GET($params = array())
    {
        if(!isset($params["pseudo"]) || !isset($params["password"])){
            throw new \Exception("error");
        }
        
        $result = $this->LogUser($params["pseudo"], $params["password"]);
        $this->response($result, 200);
    }

    private function LogUser($Pseudo, $Password){
        $login = new LoginService;
        $user = $login->LogUser($Pseudo, $Password);

        return $user;
    }
}