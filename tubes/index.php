<?php
session_start();

if (!isset($_SESSION['login'])) {
  header("Location: login.php");
  exit;
}

require 'functions.php';

$produk = query("SELECT * FROM produk");

// ketika tombol cari di klik
if (isset($_POST['cari'])) {
  $produk = cari($_POST['keyword']);
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

  <!-- google font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Charis+SIL:ital@1&family=Koulen&family=Lobster&family=Open+Sans:wght@300&family=Pacifico&family=Satisfy&display=swap" rel="stylesheet">
  <title>Produk</title>
</head>

<body>
  <!-- navbar -->
  <nav class="navbar navbar-expand-lg " style="background-color: #827397">
    <div class="container-fluid">
      <h3 class="navbar-brand mt-1 text-light" style="font-family: 'Lobster', cursive; font-size:30px;">Shophone</h3>

      <form action="" method="post" class="d-flex mt-2">
        <input class="keyword form-control me-2 mb-2" type="text" name="keyword" placeholder="Search" autocomplete="off" autofocus>
        <button class="tombol-cari btn mb-2" type="submit" name="cari"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
          </svg>
        </button>
      </form>
    </div>
    </div>
  </nav>
  <!-- akhir navbar -->
  <section id="home">
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="img/carousel1.jpg" class="d-block w-100" height="600px">
        </div>
        <div class="carousel-item">
          <img src="img/carousel2.jpg" class="d-block w-100" height="600px">
        </div>
        <div class="carousel-item">
          <img src="img/carousel3.jpg" class="d-block w-100" height="600px">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </section>

  <!-- produk -->
  <h1 class="text-center mt-5" style="font-family: 'Charis SIL', serif; font-size:50px; font-weight:600;">Produk</h1>

  <div class="container ">
    <section id="produk">
      <?php if (empty($produk)) : ?>
        <tr>
          <td colspan="4">
            <p style="color: red; font-style:italic;">Hasil tidak ditemukan</p>
          </td>
        </tr>
      <?php endif; ?>
      <?php $i = 1;
      foreach ($produk as $prd) : ?>
        <div class="card float-start me-4 mt-4" style="width: 18rem; margin:50px;">
          <img src="img/<?= $prd['gambar']; ?>" class="card-img-top" height="180px">
          <div class="card-body">
            <h5 class="card-title"><?= $prd['tipe']; ?></h5>
            <p class="card-text text-success"><?= $prd['harga']; ?></p>
            <a href="detail.php?id_produk=<?= $prd['id_produk']; ?>" class="btn" style="background-color:#ECB390;   ">Detail</a>
          </div>
        </div>
      <?php endforeach; ?>
    </section>
  </div>
  <!-- akhir produk -->



  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  <script src="js/script.js"></script>


</body>

</html>