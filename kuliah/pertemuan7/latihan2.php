<!-- <h1>Detail Mahasiswa</h1>

<h3><?= $_GET["nama"]; ?></h3>
<p><?= $_GET["npm"]; ?></p>
<p><?= $_GET["email"]; ?></p>

<a href="kuliah_latihan1.php">Kembali</a> -->



<?php
// Cek apakah tidak ada data di $_GET
if (
    !isset($_GET["nama"]) ||
    !isset($_GET["npm"]) ||
    !isset($_GET["email"]) ||
    !isset($_GET["jurusan"]) ||
    !isset($_GET["gambar"])
) {
    // redirect
    header("Location: latihan1.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Mahasiswa</title>
</head>

<body>
    <ul>
        <li><img src="<?= $_GET["gambar"]; ?>"> </li>
        <li><?= $_GET["nama"]; ?></li>
        <li><?= $_GET["npm"]; ?></li>
        <li><?= $_GET["email"]; ?></li>
        <li><?= $_GET["jurusan"]; ?></li>
    </ul>

    <a href="latihan1.php">kembali</a>
</body>

</html>