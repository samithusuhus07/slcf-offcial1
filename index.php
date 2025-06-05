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
            background-size: cover;
            background-attachment: fixed;
        }
    </style>
</head>

<body>
    

    <div class="container d-flex justify-content-center vh-100 align-items-center">
        <div class="card shdow-lg p-3" style="width: 500px;">
            <h1 class="text-center">SLCF</h1>
            <div class="card-body">
                <p id="response"></p>
                <div class="mb-3">
                    <label for="email" class="from-label">Enter Your Email</label>
                    <input type="email" id="email" class="form-control">
                </div>
                <div class="mb-3">
                <label for="password" class="from-label">Enter Your Password</label>
                <input type="password" id="password" class="form-control">
                </div>
                <div class="mb-3">
                    <button class="btn btn-primary w-100" onclick="signin();">Login</button>
                </div>
                <p class="text-center">Don't Have An Account? <a href="signup.php" class="text-decoration-none">SignUp</a></p>
            </div>
        </div>
    </div>

    <!-- ✨ Bootstrap JS CDN -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="script.js"></script>

</body>
</html>
