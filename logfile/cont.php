<?php
include('content.php');
    if($_SERVER['REQUEST_METHOD'] === "POST")
    {
        $name = $_POST['str'];
        if($name == "soorya")
        {
            echo " Enter name is correct";
        }
        else
        {
            $user = " User ented data is invalid ($name)";
            logger($user);
            echo " Enter data is invalid";
        }
    }

?>

<form action="" method="POST">
    <input type="text" name="str">
    <input type="submit">
</form>