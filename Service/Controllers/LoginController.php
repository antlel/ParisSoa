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

    public function GET($params = NULL)
    {
        $headers = getallheaders();
        if(!isset($headers["pseudo"]) || !isset($headers["password"])){
            throw new \Exception("error");
        }
        $result =  $this->LogUser($headers["pseudo"], $headers["password"]);
        $this->response($result, 200);
    }

    private function LogUser($Pseudo, $Password){
        $login = new LoginService;
        $user = $login->LogUser($Pseudo, $Password);

        return $user;
    }
}