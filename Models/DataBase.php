<?php

class DataBase
{
    public function connection($HOST, $DB_NAME, $DB_USER, $DB_PASSWORD)
    {

    }

    public function open()
    {
        echo 'Connection Is Opened';
    }

    public function close()
    {
        echo 'Connection Is Closed';
    }
}