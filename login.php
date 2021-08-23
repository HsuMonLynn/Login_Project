<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>login</title>
</head>
<body class="text-center">
    <div class="container">
    <div class="wrap col-md-6 offset-md-3">
        <h1 class="h3 mb-3">Login</h1>
        <form action="" method="post">
            <input type="email" class="form-control mb-2" name="email" placeholder="Email" required> <br>
            <input type="password" class="form-control mb-2" name="password" placeholder="Password" required> <br>
            <button type="submit" class="btn btn-primary w-100 btn-lg">Login</button>
        </form>
    </div>
</div>
<?php
    session_start();
    $email = $_POST['email'];
    $password=$_POST['password'];
    if($email === 'admin123@gmail.com' and $password === 'admin123'){
        header('location: home.php');
    }
    else
    ?>

</body>
</html>