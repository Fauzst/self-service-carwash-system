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
    $servername = "localhost";
    $username = "root";
    $password = "101407";
    $dbname = "carwashDB";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Query to fetch data from the 'packages' table
    $sql = "SELECT * FROM packages";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Output data of each row
        while($row = $result->fetch_assoc()) {
            echo "ID: " . $row["id"] . " - Name: " . $row["package_name"] . " - Price: " . $row["price"] . "<br>";
        }
    } else {
        echo "No packages found.";
    }

    // Close the connection
    $conn->close();
?>
</body>
</html>
