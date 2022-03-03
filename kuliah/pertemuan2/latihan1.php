<?php
// pertemuan 2, membahas mengenai sintaks PHP

// standar output : untuk menampilkan / mencetak sesuatu ke layar
// echo, print
// print_r : khusus untuk mencetak isi array
// var_dump : untuk melihat isi dari variabel (nanti akan tampil informasi dari variabel tersebut)

// penulisan sintaks PHP
// 1. PHP di dalam HTML (lebih sering digunakan) / contohnya ada di bawah
// 2. HTML di dalam PHP  / contohnya ada dibawah


// nilai :integer, string, boolean
echo 10;
echo "<hr>";

// VARIABEL
// wadah untuk menyimpan NILAI
// namanya bebas, tapi tidak boleh diawali angka 
// tidak boleh ada spasi
$nama = "Syifa";
echo $nama;
echo "<br>";
// bisa ditimpa / overwrite
$nama = "Rizki";
echo $nama;
echo "<hr>";

// STRING
// ' ', " "
echo "jum'at";
echo "<br>";
echo 'syifa : "Halo, semua!"';
echo "<br>";

// escaped character
// \
echo 'Syifa : "jum\'at"';
echo "<br>";
echo "Syifa : \"jum'at\"";
echo "<br>";

// Interpolasi
// mencetak isi VARIABEL
// hanya bisa digunakan oleh " "

echo "Halo nama saya $nama";
echo "<br>";
$price = 200;
echo "price: $$price";
echo "<hr>";

// OPERATOR
// Aritmatika
// +, -, *, /, % (modulo / modulus / sisa bagi)
echo (1 + 1) * 3 - 4;
echo "<br>";
$alas = 10;
$tinggi = 20;
$luas_segi_tiga = ($alas * $tinggi) / 2;
echo $luas_segi_tiga;
echo "<br>";
echo 3 % 2;
echo "<hr>";


// Concat
// penggabung String
//  .
$nama_depan = "Syifa";
$nama_belakang = "Rizki";
echo $nama_depan . " " . $nama_belakang;
echo "<hr>";

// PERBANDINGAN
//  <, >, <=, >=, ==, !=
echo 1 < 5;
echo "<br>";
echo 10 == "10";
echo "<br>";
var_dump(1 == 5);
echo "<hr>";


// Identitas / strict comparison 
// ===, !==
echo 10 === "10";
echo "<hr>";


// Increment / Decrement
// Pertambahan / Pengurangan 1
// ++, --
$x = 10;
echo ++$x;
echo "<br>";
echo $x++;
echo "<br>";
echo "<hr>";

// assignment
// =, +=, -=, *=, /=, %=, .=
$x = 1;
$x -= 5;
echo $x;
echo "<hr>";
$nama = "syifa";
$nama .= " ";
$nama .= "rizki";
echo $nama;

echo "<br>";
echo "<hr>";

// logika
// &&, ||, !
// && : dua-duanya harus benar maka nilainya akan true
// || : cukup satu yang benar maka nilainya akan true
$x = 10;
var_dump($x < 20 && $x % 2 == 0);
echo "<br>";
$x = 30;
var_dump($x < 20 || $x % 2 == 0);
echo "<hr>";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
</head>

<body>
    <h1>Halo, selamat datang <?php echo "Syifa"; ?> </h1>
    <p><?php echo "ini adalah paragraf"; ?></p>
    <hr>
    <?php
    echo "<h1> Halo, selamat datang Syifa </h1>";
    ?>
</body>

</html>