<?php
session_start();

if (!isset($_SESSION['login'])) {
  header("Location: login.php");
  exit;
}

require 'functions.php';

// ambil id dari url
$id_produk = $_GET['id_produk'];

// query produk berdasarkan id
$prd = query("SELECT * FROM produk WHERE id_produk = $id_produk");

// cek apakah tombol ubah sudah dipencet
if (isset($_POST['ubah'])) {
  if (ubah($_POST) > 0) {
    echo "
        <script>
            alert('Data berhasil diubah!');
            document.location.href='admin.php';
        </script>";
  } else {
    echo "
           <script>
                 alert('Data gagal diubah!');
                 document.location.href='admin.php';  
           </script>";
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

  <title>Ubah Data</title>
</head>

<body>
  <h1>Ubah Data</h1>

  <form action="" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id_produk" value="<?= $prd['id_produk']; ?>">
    <div class="row mb-3 container-fluid">
      <div class="col-sm-10">
        <input type="text" class="form-control" name="tipe" id="tipe" placeholder="Tipe" autofocus required value="<?= $prd['tipe']; ?>">
      </div>
    </div>
    <div class="row mb-3 container-fluid">
      <div class="col-sm-10">
        <input type="text" class="form-control" name="kategori" id="kategori" placeholder="Kategori" required value="<?= $prd['kategori']; ?>">
      </div>
    </div>
    <div class="row mb-3 container-fluid">
      <div class="col-sm-10">
        <input type="text" class="form-control" name="memori" id="memori" placeholder="Memori" required value="<?= $prd['memori']; ?>">
      </div>
    </div>
    <div class="row mb-3 container-fluid">
      <div class="col-sm-10">
        <input type="text" class="form-control" name="rear_camera" id="rear_camera" placeholder="Kamera Utama" required value="<?= $prd['rear_camera']; ?>">
      </div>
    </div>
    <div class="row mb-3 container-fluid">
      <div class="col-sm-10">
        <input type="text" class="form-control" name="front_camera" id="front_camera" placeholder="Kamera Depan" required value="<?= $prd['front_camera']; ?>">
      </div>
    </div>
    <div class="row mb-3 container-fluid">
      <div class="col-sm-10">
        <input type="text" class="form-control" name="baterai" id="baterai" placeholder="Baterai" required value="<?= $prd['baterai']; ?>">
      </div>
    </div>
    <div class="row mb-3 container-fluid">
      <div class="col-sm-10">
        <input type="text" class="form-control" name="harga" id="harga" placeholder="harga" required value="<?= $prd['harga']; ?>">
      </div>
    </div>
    <div class="row mb-3 container-fluid">
      <input type="hidden" name="gambar_lama" value="<?= $prd['gambar']; ?>">
      <div class="col-sm-10">
        <input type="file" class=" gambar form-control" name="gambar" id="gambar" onchange="previewImage()">
        <img src="img/<?= $prd['gambar']; ?>" width="120" class="img-preview mt-4 ">
      </div>
    </div>

    <button type="submit" class="btn btn-primary ms-4 mb-3" name="ubah">Ubah Data</button>
  </form>

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