<?php
require_once './Interfaces/Crud.php';

class DataBaseProcess
{
    public function create(Crud $crud)
    {
        $crud->create();
    }
}