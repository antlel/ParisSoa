<?php
namespace Service\Controllers;

interface IServiceController
{
    public function GET();
    public function POST();
    public function PUT();
    public function DELETE();
}
