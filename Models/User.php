<?php
require_once 'DataBase.php';
require_once './Interfaces/Crud.php';
class User extends DataBase implements Crud
{
    public $id;
    public $name;
    public $email;


    protected $data = [];

    public function __construct($id, $name, $email)
    {
        $this->id = $id;

        $this->name = $name;
        $this->email = $email;
    }

    public function toArray(): array
    {
        $this->data['id'] = $this->id;
        $this->data['name'] = $this->name;
        $this->data['email'] = $this->email;

        return $this->data;
    }

    public function create()
    {
        $this->open();
        echo "<br>";
        echo "Created User";
        echo "<br>";
        print_r($this->toArray());
        $this->close();
    }

    public function update(int $id)
    {
        $this->open();
        echo "<br>";
        echo "Updated  User".$id;
        echo "<br>";
        print_r($this->toArray());
        $this->close();
    }

    public function show(int $id)
    {
        $this->open();
        echo "<br>";
        echo "Show  User".$id;
        echo "<br>";
        $this->close();
    }

    public function delete(int $id)
    {
        $this->open();
        echo "<br>";
        echo "Delete  User".$id;
        echo "<br>";
        $this->close();
    }
}