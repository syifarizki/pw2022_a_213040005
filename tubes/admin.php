<?php
session_start();

if (!isset($_SESSION['login'])) {
  header("Location: login.php");
  exit;
}

require 'functions.php';




$produk = query("SELECT * FROM produk ");


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
  <title>Admin</title>
  <!-- google font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Charis+SIL:ital@1&family=Koulen&family=Lobster&family=Open+Sans:wght@300&family=Pacifico&family=Satisfy&display=swap" rel="stylesheet">
</head>

<body>
  <!-- navbar -->
  <nav class="navbar navbar-expand-lg " style="background-color: #827397">
    <div class="container-fluid">
      <a class="navbar-brand text-light ms-4" href="#" style="font-family: 'Lobster', cursive; font-size:30px;">Shophone</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link active me-2" aria-current="page" href="index.php" style="background-color: #E9D5CA;  color:#A25B5B; border-radius:20px; font-weight:bold;">Dashboard</a>
          </li>

          <li class="nav-item">
            <a class="nav-link me-5" href="logout.php" style="background-color: #E9D5CA; border-radius:20px; color:#A25B5B; font-weight:bold;">Logout</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- akhir navbar -->
  <!-- tambah data -->
  <h2 class="ms-2 mb-2 mt-4" style="padding-left:60px;">Daftar Produk</h2>
  <a class="tambah btn btn-primary " style="margin-left:60px; background-color: #E9D5CA; color:#A25B5B; font-weight:bold;" href="tambah.php" role="button">Tambah Data</a>
  <!-- pdf -->
  <a href="cetak.php"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" class="bi bi-file-earmark-pdf-fill ms-2" viewBox="0 0 16 16">
      <path d="M5.523 12.424c.14-.082.293-.162.459-.238a7.878 7.878 0 0 1-.45.606c-.28.337-.498.516-.635.572a.266.266 0 0 1-.035.012.282.282 0 0 1-.026-.044c-.056-.11-.054-.216.04-.36.106-.165.319-.354.647-.548zm2.455-1.647c-.119.025-.237.05-.356.078a21.148 21.148 0 0 0 .5-1.05 12.045 12.045 0 0 0 .51.858c-.217.032-.436.07-.654.114zm2.525.939a3.881 3.881 0 0 1-.435-.41c.228.005.434.022.612.054.317.057.466.147.518.209a.095.095 0 0 1 .026.064.436.436 0 0 1-.06.2.307.307 0 0 1-.094.124.107.107 0 0 1-.069.015c-.09-.003-.258-.066-.498-.256zM8.278 6.97c-.04.244-.108.524-.2.829a4.86 4.86 0 0 1-.089-.346c-.076-.353-.087-.63-.046-.822.038-.177.11-.248.196-.283a.517.517 0 0 1 .145-.04c.013.03.028.092.032.198.005.122-.007.277-.038.465z" />
      <path fill-rule="evenodd" d="M4 0h5.293A1 1 0 0 1 10 .293L13.707 4a1 1 0 0 1 .293.707V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2zm5.5 1.5v2a1 1 0 0 0 1 1h2l-3-3zM4.165 13.668c.09.18.23.343.438.419.207.075.412.04.58-.03.318-.13.635-.436.926-.786.333-.401.683-.927 1.021-1.51a11.651 11.651 0 0 1 1.997-.406c.3.383.61.713.91.95.28.22.603.403.934.417a.856.856 0 0 0 .51-.138c.155-.101.27-.247.354-.416.09-.181.145-.37.138-.563a.844.844 0 0 0-.2-.518c-.226-.27-.596-.4-.96-.465a5.76 5.76 0 0 0-1.335-.05 10.954 10.954 0 0 1-.98-1.686c.25-.66.437-1.284.52-1.794.036-.218.055-.426.048-.614a1.238 1.238 0 0 0-.127-.538.7.7 0 0 0-.477-.365c-.202-.043-.41 0-.601.077-.377.15-.576.47-.651.823-.073.34-.04.736.046 1.136.088.406.238.848.43 1.295a19.697 19.697 0 0 1-1.062 2.227 7.662 7.662 0 0 0-1.482.645c-.37.22-.699.48-.897.787-.21.326-.275.714-.08 1.103z" />
    </svg></a>
  <!-- akhir tambah data -->
  <!-- cari -->
  <form action="" method="post" class="form-cari d-flex mt-4 mb-4 ms-2" style="padding-left:60px;">
    <input class="form-cari keyword form-control me-2 " type="text" name="keyword" placeholder="Search" autocomplete="off" autofocus style="width: 500px;">
    <button class="tombol-cari btn btn-outline-success" type="submit" name="cari">Search</button>
  </form>

  <!-- akhir cari -->

  <!-- link sorting -->
  <?php require 'sorting.php'; ?>

  <!-- produk -->
  <div class="container ">
    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Kategori</th>
          <th scope="col">Tipe</th>
          <th scope="col">Memori</th>
          <th scope="col">Kamera Utama</th>
          <th scope="col">Kamera Depan</th>
          <th scope="col">Baterai</th>
          <th scope="col">Harga</th>
          <th scope="col">Gambar</th>
          <th class="aksi" scope="col">Aksi</th>

        </tr>
      </thead>
      <tbody>

        <?php $i = 1;
        foreach ($produk as $prd) : ?>
          <tr class="align-middle">
            <th><?= $i; ?></th>
            <td><?= $prd["kategori"] ?></td>
            <td><?= $prd["tipe"] ?></td>
            <td><?= $prd["memori"] ?></td>
            <td><?= $prd["rear_camera"] ?></td>
            <td><?= $prd["front_camera"] ?></td>
            <td><?= $prd["baterai"] ?></td>
            <td><?= $prd["harga"] ?></td>
            <td><img src="img/<?= $prd["gambar"]; ?>" width="100px"> </td>
            <td class="aksi">
              <a href="ubah.php?id_produk=<?= $prd['id_produk']; ?>" class="btn badge bg-warning">Ubah</a>
              <a href="hapus.php?id_produk=<?= $prd['id_produk']; ?>" onclick="return confirm ('Apakah anda yakin?');" class="btn badge bg-danger">Hapus</a>
            </td>
          </tr>
          <?php $i++; ?>
        <?php endforeach; ?>
      </tbody>
    </table>
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
  <script src="js/script_admin.js"></script>
</body>

</html>