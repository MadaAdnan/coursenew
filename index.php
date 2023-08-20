<?php
require_once './Models/User.php';
require_once './Models/Book.php';
require_once 'Repo/DataBaseProcess.php';
$user=new User(12,'ahmad','ahmad@gmail.com');

$book=new Book(1,'تفسير الطبري',$user->id,'الطبري');

$rep=new DataBaseProcess();

$rep->create($user);
