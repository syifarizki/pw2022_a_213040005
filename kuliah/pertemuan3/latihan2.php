<?php
// PENGONDISIAN / PERCABANGAN
// if else
// if else if else
// ternary : untuk mengganti if else yang sederhana
// switch : digunakan ketika if elsenya udah terlalu banyak, bisa diringkas menggunakan switch


// (kalau dia false dia akan menampilkan nilai yang ada di baris selanjutnya yaitu baris 14, kalau nilainya juga true baris ke 14 tetap muncul, untuk menaganinya masukin ke dalam else )
$x = 20;
if ($x < 20) {
    echo "benar";
} else if ($x == 20) {
    echo "binggo!";
} else {
    echo "salah";
}
