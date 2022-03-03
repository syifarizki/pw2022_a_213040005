<?php
// PENGULANGAN
// ada 4 jenis pengulangan yaitu:
// for
// while : selama kondisinya bernilai true, lakukan apapun yang ada didalamnya. kalau false ga akan dijalankan
// do.. while : lakukan hal ini selama kondisi bernilai true
// foreach : pengulangan khusus array

// FOR  
for ($i = 0; $i < 5; $i++) {
    echo "Hello World! <br>";
}
echo "<hr>";

// WHILE
$i = 0;
while ($i < 5) {
    echo "Hello Syifa! <br>";
    $i++;
}
echo "<hr>";

// DO.. WHILE
$i = 0;
do {
    echo "Hello World! <br>";
    $i++;
} while ($i < 5);

echo "<hr>";
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan 1</title>
    <style>
        .warna-baris {
            background-color: salmon;
        }
    </style>
</head>

<body>
    <table border="1" cellpadding="10" cellspacing="0">
        <!-- cara yang pertama -->
        <!-- <?php
                for ($i = 1; $i <= 3; $i++) {
                    echo "<tr>";
                    for ($j = 1; $j <= 5; $j++) {
                        echo "<td>$i,$j</td>";
                    }
                    echo "</tr>";
                }
                ?> -->
        <!-- cara yang kedua -->
        <!-- <?php for ($i = 1; $i <= 3; $i++) { ?>
            <tr>
                <?php for ($j = 1; $j <= 5; $j++) { ?>
                    <td><?php echo "$i, $j"; ?></td>
                <?php } ?>
            </tr>
        <?php } ?> -->
        <!-- cara yang ketiga -->
        <!-- kurung kurawal bukanya diganti dengan : -->
        <!-- kurung kurawal tutupnya diganti dengan endfor untuk for
             contoh lainnya kalau if jadi endif -->
        <?php for ($i = 1; $i <= 5; $i++) : ?>
            <?php if ($i % 2 == 1) : ?>
                <tr class="warna-baris">
                <?php else : ?>
                <tr>
                <?php endif; ?>
                <?php for ($j = 1; $j <= 5; $j++) : ?>
                    <td><?php echo "$i, $j"; ?></td>
                <?php endfor ?>
                </tr>
            <?php endfor ?>
    </table>
</body>

</html>