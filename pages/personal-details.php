<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></scrip>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
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
            width: 30%;
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

        @media only screen and (max-width:600px){
            .form-container {
                border: 1px solid grey;
                padding: 20px;
                width: 70%;
                border-radius: 10px;
                background-color: white;
            }
        }
    </style>
</head>
    <script>
        function goToHome(){
            window.location.href="../index.php";
        }
    </script>
<body>
    <div class="full-container flex-center">
        <div class="form-container">
            <h1 class="text-primary"><strong>Personal Information</strong></h1>
            <hr >
            <label for="">Name: </label>
            <br>
            <input type="text" name="name" style="width: 95%;">
            <br>
            <label for="">Email for Receipt:</label>
            <input type="text" name="email" style="width: 95%">
            <br>
            <label for="">Licensed Plate Number:</label>
            <br>
            <input type="text" name="plate-number" style="width: 95%;">
            <label for="">Vehicle Type:</label>
            <br>
            <input type="radio" name="vehicle_type"> Car
            <br>
            <input type="radio" name="vehicle_type"> Motorcycle
            <br>
            <input type="radio" name="vehicle_type"> Tricycle
            <br>
            <input type="radio" name="vehicle_type"> Jeepney/E-Jeepney
            <br>
            <input type="radio" name="vehicle_type"> Bicycle
            <hr>
            <div class="form-button">
                <div><button class="btn" onclick="goToHome()">Back to Homepage</button></div>
                <div><button class="btn btn-primary">Continue</button></div>
            </div>
        </div>
    </div>
</body>
</html>