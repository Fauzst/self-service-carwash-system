
<?php
    $host = "localhost";
    $username = "root";
    $password = "101407";
    $db = "carwashDB";

    $conn = new mysqli($host, $username, $password, $db);

    if ($conn->connect_error)
    {
        http_response_code(500);
        $failed = json_encode(["error" => "Database Connection Failed"]);
        echo "<script>alert('" . addslashes($failed) . "');</script>";
        exit;
    }
    else
    {
        http_response_code(200);
        $connected = json_encode(["success" => "Connected Succesfully!"]);
        echo "<script>alert('" . addslashes($connected) . "');</script>";
    }

?>

<?php
// Sample data (this could come from a database query)
$data = [
    [
        "title" => "Card 1",
        "content" => "This is the content of the first card.",
        "image" => "https://via.placeholder.com/150",
    ],
    [
        "title" => "Card 2",
        "content" => "This is the content of the second card.",
        "image" => "https://via.placeholder.com/150",
    ],
    [
        "title" => "Card 3",
        "content" => "This is the content of the third card.",
        "image" => "https://via.placeholder.com/150",
    ],
    [
        "title" => "Card 3",
        "content" => "This is the content of the third card.",
        "image" => "https://via.placeholder.com/150",
    ],
    [
        "title" => "Card 3",
        "content" => "This is the content of the third card.",
        "image" => "https://via.placeholder.com/150",
    ],
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
        .full-container {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100vh;
            background-color: #f7f7f7;
            z-index: 9999;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .form-container {
            border: 1px solid grey;
            padding: 20px;
            width: 60%;
            border-radius: 10px;
            background-color: white;
            
        }

        .form-container label {
            margin-bottom: 10px;
        }
        
        .form-container input {
            margin-bottom: 10px;
        }
        
        .form-button {
            display: flex;
            justify-content: space-between;
        }

        .card-container {
            display: flex;
            justify-content: space-between;
            gap: 20px;
        }

        @media only screen and (max-width:600px){
            .form-container {
                border: 1px solid grey;
                padding: 20px;
                width: 90%;
                border-radius: 10px;
                background-color: white;
                height: 90vh;
            }

            .card-container {
                flex-direction: column;
               align-items: center;
               overflow-y: scroll;
               height: 80%;
            }
        }
    </style>
</head>
    <script>
        function goToPersonal(){
            window.location.href="personal-details.php";
        }
    </script>
<body>
    
<div class="full-container flex-center">
    <form class="form-container" method="post">
        <div class="card-container">
            <?php 
            $cardCount = 0; // Track how many cards have been outputted
            foreach ($data as $index => $item): 
                if ($cardCount % 3 == 0 && $cardCount != 0): 
                    echo '</div><div class="card-container">'; // Start a new row after 3 cards
                endif;
            ?>
                <div class="card" style="width: 18rem; border: 1px solid black; margin-bottom: 16px;">
                    <img class="card-img-top" src="<?php echo $item["image"]; ?>" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $item["title"]; ?></h5>
                        <p class="card-text"><?php echo $item["content"]; ?></p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            <?php 
                $cardCount++; // Increment card counter
            endforeach; 
            ?>
        </div> <!-- Closing the last row -->
    </form>
</div>

<style>
    .card-container {
        display: flex;
        flex-wrap: wrap;
        justify-content: flex-start; /* Align items to the left */
        gap: 16px; /* Add equal gaps between cards */
    }
</style>


            
            <hr>
            <div class="form-button">
                <div><button class="btn" onclick="goToPersonal()">Back</button></div>
                <div><button class="btn btn-primary" type="submit" name="continue">Continue</button></div>
            </div>
        </form>

     
    </div>
</body>
</html>