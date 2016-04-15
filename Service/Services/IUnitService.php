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
    public function Create($object);
    public function Read($id = NULL);
    public function Update($object);
    public function Delete($id);
}