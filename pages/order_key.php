<?php
    include "../controller/finish_transaction.php";
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
                height: auto;
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
        <form class="form-container" method="post" style="overflow-y: auto;">
            <p class="text-center">Your order code is...</p>
            <h1 class="text-center"><strong>O1wu8Ay57</strong></h1>
            <p class="text-center">Show this code to the front-desk to confirm your service.</p>
            <div class="d-flex justify-content-center">
                <button class="btn btn-primary" name="finish_transact" type="submit">Finish Transaction</button>
            </div> 
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
            
          

     
    </div>
</body>
</html>