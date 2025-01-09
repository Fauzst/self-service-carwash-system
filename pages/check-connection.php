<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Packages</title>
</head>
<body>
    <h1>Available Packages</h1>
<?php
    /* require_once "../controller/database-controller.php";

    $dbController = new DatabaseController();

    $getData = $dbController->getPackage();

    if (!empty($getData))
    {
        foreach ($getData as $data)
        {
            echo "ID:" . $user['id'] . ", Package: " . $user['package_name'] . ", Price: " . $user['price'];
        }
    }
    else 
    {
        echo "No users found.";
    }

    */

    $conn = new mysqli("localhost", "root", "101407", "carwashDB");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connected successfully to the database!";
}

// Close the connection (optional for testing, usually done at the end of the script)
$conn->close();
    

?>
</body>
</html>
