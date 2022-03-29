<!-- <?php
        $mahasiswa = [
            [
                "gambar" => "img/3.jpg",
                "nama" => "Syifa Rizki Mutia",
                "npm" =>  "213040005",
                "email" => "rizkisyifa379@gamil.com",
                "jurusan" => "Teknik Informatika"
            ],
            [
                "gambar" => "img/1.jpg",
                "nama" => "Kevin Sanjaya",
                "npm" => "213040348",
                "email" => "kevin@gmail.com",
                "jurusan" => "Teknik Informatika"
            ],
            [
                "gambar" => "img/2.jpg",
                "nama" => "Shaly Rahma Mutia",
                "npm" => "212040008",
                "email" => "shaly@gmail.com",
                "jurusan" => "Administrasi Bisnis"
            ],
            [
                "gambar" => "img/4.png",
                "nama" => "Mega Dewi G.",
                "npm" => "213040975",
                "email" => "mega@gmail.com",
                "jurusan" => "Teknik Informatika"
            ],
            [
                "gambar" => "img/3.jpg",
                "nama" => "Ramadhoananingsih",
                "npm" => "212046789",
                "email" => "ony@gmail.com",
                "jurusan" => "Akuntansi"
            ],
            [
                "gambar" => "img/1.jpg",
                "nama" => "Heri Herdana",
                "npm" => "212041234",
                "email" => "heri@gmail.com",
                "jurusan" => "Manajemen"
            ],
            [
                "gambar" => "img/2.jpg",
                "nama" => "Risma Rahmana F",
                "npm" => "213040010",
                "email" => "risma@gmail.com",
                "jurusan" => "Teknik Informatika"
            ],
            [
                "gambar" => "img/4.png",
                "nama" => "Widya Dwi Indrianti",
                "npm" => "213040034",
                "email" => "indri@gmail.com",
                "jurusan" => "Teknik Informatika"
            ],
            [
                "gambar" => "img/1.jpg",
                "nama" => "Aufa Husniati",
                "npm" => "213040018",
                "email" => "aufa@gmail.com",
                "jurusan" => "Teknik Informatika"
            ],
            [
                "gambar" => "img/2.jpg",
                "nama" => "Nana",
                "npm" => "213043424",
                "email" => "nana@gmail.com",
                "jurusan" => "Teknik Mesin"
            ]
        ];

        ?> -->


<!-- <!doctype html>
<html lang="en">

<head> -->
<!-- Required meta tags -->
<!-- <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"> -->

<!-- Bootstrap CSS -->
<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Detail Mahasiswa</title>
</head> -->

<!-- <body>
    <div class="container">
        <h1>Detail Mahasiswa</h1>
        <div class="card mb-3" style="max-width: 540px;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="<?= $_GET["gambar"]; ?>" class="img-fluid rounded-start">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title"><?= $_GET["nama"]; ?></h5>
                        <p class="card-text"><?= $_GET["npm"]; ?></p>
                        <p class="card-text"><?= $_GET["email"]; ?></p>
                        <p class="card-text"><?= $_GET["jurusan"]; ?></p>
                        <a href="kuliah_latihan3.php">kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> -->

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
<!-- </body> -->

<!-- </html> -->



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST</title>
</head>

<body>
    <h1>Selamat Datang, <?= $_POST["nama"]; ?>!</h1>
</body>

</html>