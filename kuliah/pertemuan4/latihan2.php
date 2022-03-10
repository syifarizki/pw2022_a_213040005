<!-- <?php
        // Membuat fungsi / definisi fungsi
        function totalLuasDuaKubus($a, $b)
        {

            $luas_a = $a * $a * $a;
            $luas_b = pow($b, 3);

            $total = $luas_a + $luas_b;

            return " Total luas dari kubus A dengan sisi $a dan kubus B dengan sisi $b adalah $total";
        }

        echo totalLuasDuaKubus(9, 4);
        echo "<br>";
        echo totalLuasDuaKubus(10, 15);
        echo "<br>";
        echo totalLuasDuaKubus(100, 200);
        ?> -->

<?php
function salam($waktu, $nama)
{
    return "Selamat $waktu, $nama!";
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latiha Function</title>
</head>

<body>
    <h1><?php echo salam("Sore", "Syifa"); ?></h1>
</body>

</html>