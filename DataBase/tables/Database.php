<?php

class Database
{

    public $connection;


    public function open(){
        echo "connection Opened";
    }

    public function close(){
        echo "connection Closed";
    }


}