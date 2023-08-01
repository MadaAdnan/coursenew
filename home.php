<?php
//include  "classes/Car.php";
//require  "classes/Car.php";
//include_once "classes/Car.php";
require_once "classes/Car.php";
Car::$model=2009;
$car=new Car(2,1.5,3,50,'black');

$car->fule=50;
$car->setCurrentSpeed(150);

$bus=new Car(2,2.5,6,100,'yellow');
$bus->speedMore(60);
$bus->getInfo();
echo "<br>";
Car::$model=2010;
$car->speedMore(50);
$car->speedMore(60);
$car->getInfo();

echo "<br>";
$bus->speedMore(100);
$bus->getInfo();

echo "<br>";
Car::getModel();

