<?php

class Car
{
    public $width;
    public $length;
    public $height;
    public $color;
    public static $model;
    protected  $fule=50;
    private  $current_speed = 0;


 public function __set(string $name, $value): void
 {
     if($name=='current_speed'){
         $this->current_speed=$value;
         $this->fule--;
     }else{
         $this->$name=$value;
     }
 }

 public function __get($name){
     return $this->$name;
 }

 public function setCurrentSpeed($speed){
     $this->current_speed=$speed;
     $this->fule--;
 }


    public function __construct($width,$height,$length,$fule,$color='red'){
        $this->width=$width;
        $this->length=$length;
        $this->height=$height;
        $this->color=$color;
        $this->fule=$fule;
    }


    public  function getInfo()
    {
        echo "The fule is ".$this->fule .' And The Current Speed '.$this->current_speed.' and Model ='.self::$model;
    }

    public function speedMore($speed)
    {
        $this->current_speed = $speed;
        $this->fule--;
    }
    public static function getModel(){
        echo self::$model;
    }
}