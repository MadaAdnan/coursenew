<?php
require_once 'DataBase.php';
require_once './Interfaces/Crud.php';
class Book extends DataBase implements Crud
{
    public $id;
    public $user_id;
    public $name;
    public $author;


    protected $data=[];
    public function __construct($id, $name, $user_id, $author)
    {
        $this->id=$id;
        $this->user_id=$user_id;
        $this->name=$name;
        $this->author=$author;
    }

   public function toArray(): array
   {
        $this->data['id']=$this->id;
        $this->data['name']=$this->name;
        $this->data['author']=$this->author;
        $this->data['user_id']=$this->user_id;
        return $this->data;
   }

    public function create()
    {
        $this->open();
        echo "<br>";
        echo "Created Book";
        echo "<br>";
        print_r($this->toArray());
        $this->close();
    }

    public function update(int $id)
    {
        $this->open();
        echo "<br>";
        echo "Updated  Book".$id;
        echo "<br>";
        print_r($this->toArray());
        $this->close();
    }

    public function show(int $id)
    {
        $this->open();
        echo "<br>";
        echo "Show  Book".$id;
        echo "<br>";
        $this->close();
    }

    public function delete(int $id)
    {
        $this->open();
        echo "<br>";
        echo "Delete  Book".$id;
        echo "<br>";
        $this->close();
    }
}