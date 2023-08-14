<?php
require_once 'session.php';
require_once 'signup_view.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
        integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V"
        crossorigin="anonymous"></script>
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="login-form">
        <form action="login.php" method="post">
            <div class="row mb-3">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" id="inputEmail3">
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" id="inputPassword3">
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Sign in</button>
        </form>
    </div>

    <div class="signup-form">
        <form class="row g-3" action="signup.php" method="post">
            <div class="col-6">
                <label for="firstname" class="form-label">First name</label>
                <input type="text" class="form-control" id="firstname" placeholder="Name">
            </div>
            <div class="col-6">
                <label for="middlename" class="form-label">Middle name</label>
                <input type="text" class="form-control" id="middlename" placeholder="Name">
            </div>
            <div class="col-6">
                <label for="lastname" class="form-label">Last name</label>
                <input type="text" class="form-control" id="lastname" placeholder="Name">
            </div>
            <div class="col-6">
                <label for="familyname" class="form-label">Famil name</label>
                <input type="text" class="form-control" id="familyname" placeholder="Name">
            </div>
            <div class="col-md-12">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" placeholder="Example@example.com">
            </div>
            <div class="col-md-6">
                <label for="pwd" class="form-label">Password</label>
                <input type="password" class="form-control" id="pwd">
            </div>
            <div class="col-md-6">
                <label for="confirmpwd" class="form-label">Confirm password</label>
                <input type="password" class="form-control" id="confirmpwd">
            </div>
            <div class="col-12">
                <label for="phonenumber" class="form-label">Phone number</label>
                <input type="number" class="form-control" id="phonenumber" placeholder="009627....">
            </div>
            <div class="col-md-6">
                <label for="dateofbirth" class="form-label">Date of birth</label>
                <input type="date" class="form-control" id="dateofbirth">
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Sign in</button>
            </div>
        </form>
    </div>

    <div class="wellcome">
        <h2 class="text-center">Hello there!</h2>
        <p class="text-center text-wrap">Automatic identity verification which enable you to verify your identity</p>
        <div class="text-center">
            <img src="login.avif" class="rounded" width="30%" alt="guy using pc">
        </div>
        <div class="text-center">
            <button type="button" class="btn btn-primary btn-lg" id="login-button">Login</button>
            <button type="button" class="btn btn-secondary btn-lg" id="signup-button">Sign UP</button>
        </div>
    </div>

    <?php
        check_signup_errors();
    ?>

    <script src="login.js"></script>
</body>

</html>