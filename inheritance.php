<?php

use Vehicle as GlobalVehicle;

class Vehicle{
        protected $name;
        protected $wheels;
        protected $color;

        function __construct()
        {
            echo " Vehicle constructor"."<br>";
        }
        public function accelerate()
        {
            echo " Accelerate vehicle"."<br>";
        }
        public function apply_break()
        {
            echo " break vehicle"."<br>";
        }
    }

    class car extends Vehicle{
        function __construct()
        {
            parent ::__construct();
            echo " car constuctor"."<br>";
        }

        protected $seatbelt;
        protected $windows;
    }

    class bike extends Vehicle{
        function __construct()
        {
            parent ::__construct();
            echo " bike construct"."<br>";
        }
        public function sidestand()
        {
            echo " bike have side stand";
        }
        protected $sidestand;
    }

    $bike_object = new bike();
    $bike_object->accelerate();
    $bike_object->apply_break();
    $bike_object->sidestand();
?>