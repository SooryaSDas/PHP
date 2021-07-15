<?php
    include('includelogfile.php');
    if($_SERVER['REQUEST_METHOD']=== "POST")
    {
        $number = $_POST['number'];
        if($number !=10)
        {
            $log = "User entered incorrect number ($number)";
            logger($log);
            echo "$number is incorrect";
        }
        else
        {
            echo " $number is correct";
        }
    }
?>

<form action="" method="POST">

    <input type="text" name="number">
    <input type="submit">
</form>