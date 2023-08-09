<?php

abstract  class Human
{
    public $color;
    public $nationality;
    public $gender;
    public $job;
    public $height;
    protected $salary;
    private $type;


    public function __construct($color,$nationality,$gender,$job,$height,$salary,$type){
        $this->color=$color;
        $this->height=$height;
        $this->salary=$salary;
        $this->job=$job;
        $this->gender=$gender;
        $this->nationality=$nationality;
        $this->type=$type;
    }
    public function walk(){
        echo "I am Walking";
    }

    public function eat(){
        echo "I am eating";
    }
    public function getSalary(){
        echo $this->salary;
    }

   abstract public function jobWay();

    final public function talk(){
        echo "I am Speak from mouth";
    }

}