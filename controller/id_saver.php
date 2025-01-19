<?php
    if(isset($_POST["submit_card"]))
    {
        $id = $_POST["submit_card"];
        $price = $_POST["package_price"];
        $package = $_POST["package_avail"];
        session_start();
        $_SESSION["id"] = $id;
        $_SESSION["package-price"] = $price;
        $_SESSION["package-avail"] = $package;
    }
?>