<?php

class Vehicle{
    private $name;
    private $roll_number;

    public function setvalue($name,$rollno)
    {
        $this-> name = $name;
        $this-> roll_number = $rollno;
    }

    public function getdata()
    {
        echo $this->name ."<br>";
        echo $this->roll_number;
    }
}

$obj = new Vehicle();
$obj->setvalue("Soorya",23);
echo $obj->getdata();

?>