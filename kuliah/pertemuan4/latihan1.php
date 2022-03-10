<!-- <?php
        // FUNCTION

        // Built-in Function
        // date()
        echo date("l, j F Y");
        echo "<hr>";
        echo time();
        // UNIX Timestamp / EPOCH Time
        // Detik yang sudah berlalu sejak 1 januari 1970
        echo "<br>";
        echo time() + 60 * 60 * 24;
        echo "<hr>";
        echo date("l, j F Y", time() - 60 * 60 * 24 * 100);
        echo "<hr>";

        // mktime(0,0,0,0,0,0);
        // mendapatkan detik pada tanggal tertentu
        // jam, menit, detik, bulan, tanggal, tahun

        echo mktime(0, 0, 0, 3, 5, 2022);
        echo "<hr>";
        echo date("l", mktime(0, 0, 0, 7, 14, 2003));
        echo "<hr>";

        // MATH
        echo pow(2, 3); //pangkat
        echo "<br>";
        echo rand(1, 10);
        echo "<br>";
        // pembulatan
        // round(), to round
        echo round(2.6);
        echo "<br>";
        echo ceil(2.1);  // ke atas (celling / langit2)
        echo "<br>";
        echo floor(2.9); // ke bawah (lantai)
        echo "<hr>";

        ?> -->

<?php
// referensi php.net
// Date
// untuk menampilkan tanggal daengan format tertentu
echo date("l, d-M-Y");
echo "<br>";
echo "<hr>";

// Time
// Unix Timestamp / EPOCH time
// detik yang sudah berlalu sejak 1 januari 1970
// echo time();
echo date("l", time() + 60 * 60 * 24 * 100);
echo "<br>";
echo "<hr>";

// mktime
// membuat sendiri detik
// mktime(0,0,0,0,0,0,0);
// jam, menit, detik, bulan, tanggal, tahun
echo date("l", mktime(0, 0, 0, 7, 14, 2003));
echo "<br>";
echo "<hr>";

// strtotime
echo  date("l", strtotime("14 jul 2003"));
?>