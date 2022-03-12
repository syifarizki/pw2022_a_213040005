<?php
//  Studi kasus

$mahasiswa = [
    ["Syifa Rizki Mutia", "213040005", "rizkisyifa379@gamil.com", "Teknik Informatika"],
    ["Kevin Sanjaya", "213040348", "kevin@gmail.com", "Teknik Informatika"],
    ["Widya Dwi Indrianti", "213040034", "indri@gmail.com", "Teknik Informatika"]
];

?>

<!-- <?php foreach ($mahasiswa as $mhs) { ?>
    <ul>
        <li>Nama : <?= $mhs[0] ?> </li>
        <li>Npm : <?= $mhs[1] ?> </li>
        <li>Email : <?= $mhs[2] ?> </li>
        <li>Jurusan : <?= $mhs[3] ?> </li>
    </ul>
<?php } ?> -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>

<body>
    <?php foreach ($mahasiswa as $mhs) { ?>
        <ul>
            <li>Nama : <?= $mhs[0] ?> </li>
            <li>Npm : <?= $mhs[1] ?> </li>
            <li>Email : <?= $mhs[2] ?> </li>
            <li>Jurusan : <?= $mhs[3] ?> </li>
        </ul>
    <?php } ?>
</body>

</html>