<?php
require_once 'Doctor.php';
require_once 'DoctorTrait.php';
class DoctorHear extends Doctor
{
    use DoctorTrait;
    public function __construct($color, $nationality, $gender, $job, $height, $salary, $type)
    {
        parent::__construct($color, $nationality, $gender, $job, $height, $salary, $type);
    }

}