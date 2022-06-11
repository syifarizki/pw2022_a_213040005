<?php
require '../functions.php';

$produk = cari($_GET['keyword']);
?>

<!-- admin -->
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Kategori</th>
      <th scope="col">Tipe</th>
      <th scope="col">Memori</th>
      <th scope="col">Kamera Utama</th>
      <th scope="col">Kamera Depan</th>
      <th scope="col">Baterai</th>
      <th scope="col">Harga</th>
      <th scope="col">Gambar</th>
      <th scope="col">Aksi</th>

    </tr>
  </thead>
  <tbody>

    <?php $i = 1;
    foreach ($produk as $prd) : ?>
      <tr class="align-middle">
        <th><?= $i; ?></th>
        <td><?= $prd["kategori"] ?></td>
        <td><?= $prd["tipe"] ?></td>
        <td><?= $prd["memori"] ?></td>
        <td><?= $prd["rear_camera"] ?></td>
        <td><?= $prd["front_camera"] ?></td>
        <td><?= $prd["baterai"] ?></td>
        <td><?= $prd["harga"] ?></td>
        <td><img src="img/<?= $prd["gambar"]; ?>" width="100px"> </td>
        <td>
          <a href="ubah.php?id_produk=<?= $prd['id_produk']; ?>" class=" btn badge bg-warning">edit</a>
          <a href="hapus.php?id_produk=<?= $prd['id_produk']; ?>" onclick="return confirm ('Apakah anda yakin?');" class="btn badge bg-danger">delete</a>
        </td>
      </tr>
      <?php $i++; ?>
    <?php endforeach; ?>
  </tbody>
</table>