<?php

    class A{
        function abc()
        {

        }
    }

    class B{

        function xyz()
        {

        }
    }

    class C{
        function ber()
        {

        }
    }

    interface D{
        public function f();
    }
    class demo extends A implements D{
        public function f()
        {
            echo " demo page";
        }
    }

    $demo = new demo();
    $demo-> f();
?>