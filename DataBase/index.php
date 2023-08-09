<?php
require_once 'tables/UserTable.php';
require_once 'tables/ProductTable.php';


$user=new UserTable();
$user->create(['name'=>'ali','password'=>'1234567890','email'=>'ali@gmail.com']);
echo "<br/>";
$product=new ProductTable();
$product->create(['name'=>'mobile','price'=>150,'ram'=>'2G']);