<?php
    include "../api/package-read.php";
    session_start();
    $vehicle = $_SESSION["vehicle-type"];

    $getPackage = new PackageReader();

    $data = $getPackage->getDataPackages($vehicle);
?>