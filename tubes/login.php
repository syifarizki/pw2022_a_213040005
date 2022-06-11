<?php
session_start();

if (isset($_SESSION['login'])) {
    header("Location: admin.php");
    exit;
}

require 'functions.php';

// ketika tombol login ditekan
if (isset($_POST['login'])) {
    $login = login($_POST);
}
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Sign In</title>
    <!-- Link CSS -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>


    <div class="login">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="card-login">
                        <div class="card-body">
                            <h1 class="card-title-login mb-3">SIGN IN</h1>

                            <?php if (isset($login['error'])) : ?>
                                <p style="color: red; font-style:italic;"><?= $login['pesan']; ?></p>
                            <?php endif; ?>
                            <form action="" method="post">
                                <div class="mb-3">
                                    <label for="username" class="form-label mb-3">Username</label>
                                    <input type="text" class="form-control mb-2" name="username" placeholder="Enter username" autofocus autocomplete="off" required>
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="form-label mb-3">Password</label>
                                    <input type="password" class="form-control mb-2" name="password" placeholder="Password" required>
                                </div>
                                <button type="submit" name="login" class="btn btn-primary mb-4">Sign In</button>
                                <p>New Member? <a href="registrasi.php">Create Account</a></p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>