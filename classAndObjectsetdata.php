<?php

    class Students{

            private $name;
            private $rollno;
            private $dept;
            private $guardian;

            public function setvalue($name,$rollno,$dept,$guardian)
            {
                $this-> name = $name;
                $this-> rollno = $rollno;
                $this-> dept = $dept;
                $this-> guardian = $guardian;
            }

            public function printdata()
            {
                echo $this->name;
                echo $this->rollno;
                echo $this->dept;
                echo $this->guardian;
            }
    }

    $obj = new Students();
    $obj->setvalue("Sooraj", 23, "Electornics", "Pushparajan");
    echo $obj->printdata() . "<br><br><br>";

    $obj1 = new Students();
    $obj1->setvalue("Soorya", 31, "ADIT", "Lohidas");
    echo $obj1->printdata() . "<br><br><br>";

    $obj2 = new Students();
    $obj2->setvalue("Sunu", 13, "Electornics", "Pushparajan");
    echo $obj2->printdata(). "<br><br><br>";

?>