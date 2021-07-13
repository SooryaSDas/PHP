<?php

use vehicle as GlobalVehicle;

class vehicle{

    }
    class toy{

    }
    class watch{

    }
    Interface charger{
        public function recharge();
    }

    // class Electoniccar extends vehicle implements charger{
    //     public function recharge()
    //     {
    //         echo " 2 day charger avialable";
    //     }
    // }

    class Electonictoy extends toy implements charger{
        public function recharge()
        {
            echo " 4 day charger available";
        }
    }

    class Electonicwatch extends watch implements charger{
        public function recharge()
        {
            echo " 6 days charger available";
        }
    }

    $Electonicwatch = new Electonicwatch();
    $Electonicwatch->recharge();
?>