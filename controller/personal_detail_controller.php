<?php 
    if(isset($_POST["go-to-payment"]))
    {
        if(!isset($_POST["vehicle_type"]))
        {
            echo "<script> alert('No Vehicle Type Selected!') </script>";
        }
        else
        {
            session_start();
            $_SESSION["name"] = $_POST["name"];
            $_SESSION["email"] = $_POST["email"];
            $_SESSION["plate-number"] = $_POST["plate-number"];
            $_SESSION["vehicle-type"] = $_POST["vehicle_type"];
            header("Location: package.php");
            exit;
        }
    }
?>