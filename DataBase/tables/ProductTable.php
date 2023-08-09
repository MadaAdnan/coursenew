<?php
require_once 'Database.php';
require_once './traits/HelperTrait.php';
require_once './interface/CrudInterface.php';
class ProductTable extends Database implements CrudInterface
{
use HelperTrait;

    public function create($data = [])
    {
      $this->open();
        echo "Create Product From Data";
        $this->close();
    }

    public function getById($id)
    {
        $this->open();
        echo "I am Product Id=".$id;
        $this->close();
    }

    public function update($id,$data = [])
    {
        // TODO: Implement update() method.
    }

    public function delete($id)
    {
        // TODO: Implement delete() method.
    }
}