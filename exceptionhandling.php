<?php

    $a = 0;
    try{
        if($a <= 10)
        {
           throw new Exception("Enter a new number");
            echo " $a is lessthan 10 ";
        }
        else
        {
            echo " $a is greater than 10";
        }
    }
    catch(Exception $e)
    {
      echo  $e->getMessage();
    }
    finally{
        " This is a final key";
    }
?>