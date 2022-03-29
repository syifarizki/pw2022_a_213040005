<!-- <?php
        // SUPERGLOBALS
        // Variabel bawaan PHP yang bisa digunakan di manapun
        // Merupakan array associative
        // $_GET
        // $_POST
        // $_SERVER


        // var_dump($_GET);
        ?> -->

<!-- <h1>Halo, <?= $_GET["nama"]; ?></h1> -->

<!-- <ul>
    <li>
        <a href="kuliah_latihan2.php?nama=Syifa&npm=213040005&email=rizkisyifa379@gmail.com">Syifa</a>

    </li>
    <li>
        <a href="kuliah_latihan2.php?nama=Shaly&npm=213040065&email=shaly@gmail.com">Shaly</a>
    </li>
    <li>
        <a href="kuliah_latihan2.php?nama=Mega&npm=213046005&email=mega@gmail.com">Mega</a>
    </li>
</ul> -->

<?php
// $_GET
// $_GET["nama"] = "Syifa Rizki Mutia";
// $_GET["nrp"] = "213040005";
// var_dump($_GET);

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

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>
    <ul>
        <?php foreach ($mahasiswa as $mhs) : ?>
            <li>
                <a href="latihan2.php?nama=<?= $mhs["nama"]; ?>&
                npm=<?= $mhs["npm"]; ?>&email=<?= $mhs["email"]; ?>&
                jurusan=<?= $mhs["jurusan"]; ?>&gambar= <?= $mhs["gambar"]; ?> "> <?= $mhs["nama"]; ?></a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>

</html>