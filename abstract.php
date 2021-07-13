<?php

    // we can't create any objects in vehicle class
    // if a class have any abstract function it must have name of this class abstract class
    abstract class vehicle{
        private $color;
        private $price;

        public function accelerate(){
            echo " accelerate vehicle";
        }

        public function apply_break()
        {
            echo " vehicle break power";
        }

        // abstract function
       abstract public function service();
    }

    class car extends vehicle{
        public function service()
        {
            echo " car service before 3 years";
        }
    }

    class bike extends vehicle{
        public function service()
        {
            echo " bike service before 6 years";
        }
    }

    // $bike_obj = new bike();
    // $bike_obj->service();

    $car_obj = new car();
    $car_obj->service();
?>