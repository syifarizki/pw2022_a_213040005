<?php
// ARRAY
// Array adalah variable yang dapat menampung lebih dari stau nilai sekaligus
// Elemen pada array boleh memiliki tipe data yang berbeda
// Pasangan antara key dan value
// Key-nya adalah index, yang dimulai dari 0
$hari1 = "Senin";
$hari2 = "Selasa";

// Membuat Array
$hari = ["Senin", "Selasa", "Rabu", "Kamis", "Jum'at"]; // cara baru
$bulan = array("Januari", "Februari", "Maret", "April"); // cara lama
$myArray = [100, "Syifa", true];


// Mencetak Array
// Mencetak 1 elemen / nilai menggunakan indexnya, index dimulai dari 0

echo $hari[1];
echo "<br>";
echo $bulan[2];
echo "<hr>";

// Mencetak semua elemen pada array
// var_dump() atau print_r()
// khusus untuk debbuging
var_dump($hari);
echo "<br>";
print_r($bulan);
echo "<hr>";

// Mencetak menggunakan looping
// for
// for ($i = 0; $i < count($hari); $i++) {
//     echo $hari[$i];
//     echo "<br>";
// }
// echo "<hr>";

// foreach (khusus untuk array)
// foreach ($bulan as $b) {
//     echo $b;
//     echo "<br>";
// }
echo "<hr>";
// Memanipulasi isi array
// Menambah elemen baru di akhir array
$hari[] = "Sabtu";
$hari[count($hari)] = "Minggu";
var_dump($hari);


?>


<div style="height:1000px"></div>