<?php
require '../functions.php';

$produk = cari($_GET['keyword']);
?>

<!-- index -->
<section id="produk">
  <?php if (empty($produk)) : ?>
    <tr>
      <td colspan="4">
        <p style="color: red; font-style:italic;">Hasil tidak ditemukan</p>
      </td>
    </tr>
  <?php endif; ?>
  <?php $i = 1;
  foreach ($produk as $prd) : ?>
    <div class="card float-start me-4 mt-4" style="width: 18rem;">
      <img src="img/<?= $prd['gambar']; ?>" class="card-img-top" height="180px">
      <div class="card-body">
        <h5 class="card-title"><?= $prd['tipe']; ?></h5>
        <p class="card-text text-success"><?= $prd['harga']; ?></p>
        <a href="detail.php?id_produk=<?= $prd['id_produk']; ?>" class="btn btn-primary">Detail</a>
      </div>
    </div>
  <?php endforeach; ?>
</section>