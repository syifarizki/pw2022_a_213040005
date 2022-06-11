<?php
session_start();

if (!isset($_SESSION['login'])) {
  header("Location: login.php");
  exit;
}

require 'functions.php';

// jika tidak ada id di url
if (!isset($_GET['id_produk'])) {
  header("Location: index.php");
  exit;
}

// ambil id dari url
$id_produk = $_GET['id_produk'];

// query produk berdasarkan id
$prd = query("SELECT * FROM produk WHERE id_produk = $id_produk");
?>


<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <title>Detail Produk</title>
</head>

<body>
  <h1 class="mb-4">Detail Produk</h1>

  <div class="row">
    <div class="col-md-3 mb-3">
      <div class="card">
        <img src="img/<?= $prd['gambar']; ?>" class="img-fluid rounded-start">
      </div>
    </div>
    <div class="col-md-5">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title"><?= $prd['tipe']; ?></h5>
          <p class="card-text mb-1">Kategori : <?= $prd['kategori']; ?></p>
          <p class="card-text mb-1">Memori : <?= $prd['memori']; ?></p>
          <p class="card-text mb-1">Kamera Utama : <?= $prd['rear_camera']; ?></p>
          <p class="card-text mb-1">Kamera Depan : <?= $prd['front_camera']; ?></p>
          <p class="card-text mb-1"> Baterai : <?= $prd['baterai']; ?></p>
          <p class="card-text text-success mb-1"><?= $prd['harga']; ?></p>
          <a href="index.php">Kembali ke Home</a>
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