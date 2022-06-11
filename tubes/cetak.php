<?php
require 'vendor/autoload.php';


// require_once 'dompdf/autoload.inc.php';
require 'functions.php';
$produk = query("SELECT * FROM produk ");


// reference the Dompdf namespace
use Dompdf\Dompdf;
use Dompdf\Options;

// instantiate and use the dompdf class
$dompdf = new Dompdf();

$options = new Options();
$options->set('isRemoteEnabled', true);
$dompdf = new Dompdf($options);

$html = '<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <!-- Bootstrap CSS -->
  <link
    rel="stylesheet"
    href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
    crossorigin="anonymous"
  />
  
  <title>Daftar Produk</title>
</head>
<body>
<h2 class="text-center">Daftar Produk</h2>
<table class="table">
<thead>
  <tr>
  <th scope="col">#</th>
  <th scope="col">Tipe</th>
  <th scope="col">Memori</th>
  <th scope="col">Kamera Utama</th>
  <th scope="col">Kamera Depan</th>
  <th scope="col">Baterai</th>
  <th scope="col">Harga</th>
  <th scope="col">Gambar</th>
  </tr>';

$i = 1;
foreach ($produk as $prd) {
  $html .= '<tr>
      <td class="align-middle">' . $i++ . '</td>    
      <td class="align-middle">' . $prd["tipe"]  . '</td>
      <td class="align-middle">' . $prd["memori"] . '</td>
      <td class="align-middle">' . $prd["rear_camera"] . '</td>
      <td class="align-middle">' . $prd["front_camera"] . '</td>
      <td class="align-middle">' .  $prd["baterai"] . '</td>
      <td class="align-middle">' . $prd["harga"] . '</td>
      <td class="align-middle"><img src="http://localhost/pw2022_a_213040005/tubes/img/' . $prd["gambar"] . '"
      width="50"></td>
    </tr>';
}

$html .= '</table>
</body>
</html>';



$dompdf->loadHtml($html);

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'potrait');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream('Data Produk', array("Attachment" => 0));
