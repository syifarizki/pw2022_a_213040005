<?php
require 'functions.php';

// jika tombol registrasi diklik
if (isset($_POST['registrasi'])) {
    if (registrasi($_POST) > 0) {
        echo "<script>
    alert('User berhasil ditambahkan, silahkan login');
    document.location.href= 'login.php';
   </script>";
    } else {
        echo "User gagal ditambahkan";
    }
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

</head>

<body>

    <div class="register" style="padding: 10px; margin-top: 56px;">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="card-register" style=" box-shadow: -8px 12px 18px 0 rgba(25, 42, 70, 0.13); margin-bottom: 35px; border-radius: 2px; padding: 20px;">
                        <div class="card-body">
                            <h1 class="card-title-register mb-3 text-center" style="color: #3882F6;">SIGN UP</h1>
                            <form action="" method="post">
                                <div class="mb-3">
                                    <label for="username" class="form-label">Username</label>
                                    <input type="text" class="form-control" name="username" placeholder="Enter username" autofocus autocomplete="off" required>
                                </div>
                                <div class="mb-3">
                                    <label for="password1" class="form-label">Password</label>
                                    <input type="password" class="form-control" name="password1" placeholder="Password" required>
                                </div>
                                <div class="mb-3">
                                    <label for="password2" class="form-label">Confirm Password</label>
                                    <input type="password" class="form-control" name="password2" placeholder="Confirm Password" required>
                                </div>
                                <button type="submit" name="registrasi" class="btn btn-primary mb-4">Sign Up</button>
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