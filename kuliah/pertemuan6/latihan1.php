<!-- <?php
        //  Array Associative
        // Array yang indexnya berupa string yang ber-asosiasi dengan nilainya
        // index dimulai dari 0, elemen dimulai dari 1

        $mahasiswa = [
            [
                "nama" => "Syifa Rizki Mutia",
                "npm" =>  "213040005",
                "email" => "rizkisyifa379@gamil.com",
                "jurusan" => "Teknik Informatika"
            ],
            [
                "nama" => "Kevin Sanjaya",
                "npm" => "213040348",
                "email" => "kevin@gmail.com",
                "jurusan" => "Teknik Informatika"
            ],
            [
                "nama" => "Shaly Rahma Mutia",
                "npm" => "211040008",
                "email" => "shal@gmail.com",
                "jurusan" => "DADministrasi Bisnis"
            ]
        ];
        // var_dump($mahasiswa[2]["email"]);
        ?>

<?php foreach ($mahasiswa as $mhs) { ?>
    <ul>
        <li>Nama : <?= $mhs["nama"] ?> </li>
        <li>Npm : <?= $mhs["npm"] ?> </li>
        <li>Email : <?= $mhs["email"] ?> </li>
        <li>Jurusan : <?= $mhs["jurusan"] ?> </li>
    </ul>
<?php } ?> -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Array</title>
    <style>
        .kotak {
            width: 30px;
            height: 30px;
            background-color: salmon;
            text-align: center;
            line-height: 30px;
            margin: 3px;
            float: left;
            transition: 1s;
        }

        .kotak:hover {
            transform: rotate(360deg);
            border-radius: 50%;
        }

        .clear {
            clear: both;
        }
    </style>
</head>

<body>

    <?php
    $angka = [
        [1, 2, 3],
        [4, 5, 6],
        [7, 8, 9]
    ];

    ?>

    <?php foreach ($angka as $a) : ?>
        <?php foreach ($a as $b) : ?>
            <div class="kotak"><?= $b; ?></div>
        <?php endforeach; ?>
        <div class="clear"></div>
    <?php endforeach; ?>
</body>

</html>