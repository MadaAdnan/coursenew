<?php
require_once 'Human.php';

class Doctor extends Human
{

    public function getSalary()
    {
        parent::getSalary();
      echo $this->salary+=500;
    }

    public function walk()
    {
       echo "I am Walk Step By Step";
    }

    public function jobWay()
    {

    }


}