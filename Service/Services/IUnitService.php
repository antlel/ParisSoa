<?php
/**
 * Created by PhpStorm.
 * User: anthony
 * Date: 15/04/2016
 * Time: 11:38
 */

namespace Service\Services;


interface IUnitService
{
    public function Create();
    public function Read();
    public function Update();
    public function Delete();
}