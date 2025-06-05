<?php

session_start();
if(isset($_SESSION['user'])){
    header("Location: home.php");
    exit;
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SLCF Official</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
        body{
            background-image: url('logo.jpg');
            background-repeat: no-repeat;
            background-size:cover;
            background-attachment: fixed;
        }
    </style>
</head>

<body>
  

    <div class="container d-flex justify-content-center vh-100 align-items-center">
        <div class="card shdow-lg p-3" style="width: 500px;">
            <h1 class="text-center">SLCF Official</h1>
            <div class="card-body">
                <p id="response"></p>
        <div class="row mb-3">
    <div class="col-md-6">
        <label for="fname" class="form-label">First Name</label>
        <input type="text" id="fname" class="form-control">
    </div>
    <div class="col-md-6">
    <label for="lname" class="form-label">Last Name</label>
    <input type="text" id="lname" class="form-control">
</div>
        </div>
 
                <div class="mb-3">
                    <label for="email" class="from-label">Enter Your Email</label>
                    <input type="email" id="email" class="form-control">
                </div>
                <div class="mb-3">
                <label for="password" class="from-label">Enter Your Password</label>
                <input type="password" id="password" class="form-control">
                </div>
                <div class="mb-3">
                    <button class="btn btn-primary w-100" onclick="signup();">SignUp</button>
                </div>
                <p class="text-center">Do You Have An Account? <a href="index.php" class="text-decoration-none">SignIn</a></p>
            </div>
        </div>
    </div>

    <script src="script.js"></script>
</body>
</html>