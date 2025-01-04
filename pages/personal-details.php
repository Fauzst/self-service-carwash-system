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
    </style>
</head>
<body>
    <div class="full-container flex-center">
        <div class="form-container">
            <label for="">Name: </label>
            <br>
            <input type="text" name="name" style="width: 95%;">
            <br>
            <label for="">Plate No:</label>
            <br>
            <input type="text" name="plate-number" style="width: 95%;">
            
        </div>
    </div>
</body>
</html>