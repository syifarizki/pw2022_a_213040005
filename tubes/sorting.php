<style>
  .input-group i {
    font-size: 22px;
  }
</style>

<?php
if (isset($_POST["kategori_naik"])) {
  $produk = query("SELECT * FROM produk ORDER BY kategori ASC;");
}
if (isset($_POST["baterai_naik"])) {
  $produk = query("SELECT * FROM produk ORDER BY baterai ASC;");
}

if (isset($_POST["kategori_turun"])) {
  $produk = query("SELECT * FROM produk ORDER BY kategori DESC;");
}
if (isset($_POST["baterai_turun"])) {
  $produk = query("SELECT * FROM produk ORDER BY baterai DESC;");
}

?>


<form action="" method="POST">
  <div class="container-urutan " style="margin-left: 60px;">
    <div class="col d-inline-flex">
      <div class="input-group me-3">
        <button class="btn btn dropdown-toggle" style="background-color:#E9D5CA ;" type="button" data-bs-toggle="dropdown" aria-expanded="false"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-sort-up" viewBox="0 0 16 16">
            <path d="M3.5 12.5a.5.5 0 0 1-1 0V3.707L1.354 4.854a.5.5 0 1 1-.708-.708l2-1.999.007-.007a.498.498 0 0 1 .7.006l2 2a.5.5 0 1 1-.707.708L3.5 3.707V12.5zm3.5-9a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zM7.5 6a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5zm0 3a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1h-3zm0 3a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1h-1z" />
          </svg>&nbsp;</button>
        <ul class="dropdown-menu" style="background-color:#E3BEC6 ;">
          <li><button class="dropdown-item" name="kategori_naik" type="submit">Kategori</button></li>
          <li><button class="dropdown-item" name="baterai_naik" type="submit">Baterai</button></li>

        </ul>
      </div>
      <div class="input-group">
        <button class="btn btn-outline dropdown-toggle" style="background-color:#E9D5CA;" type="button" data-bs-toggle="dropdown" aria-expanded="false"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-sort-down" viewBox="0 0 16 16">
            <path d="M3.5 2.5a.5.5 0 0 0-1 0v8.793l-1.146-1.147a.5.5 0 0 0-.708.708l2 1.999.007.007a.497.497 0 0 0 .7-.006l2-2a.5.5 0 0 0-.707-.708L3.5 11.293V2.5zm3.5 1a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zM7.5 6a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5zm0 3a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1h-3zm0 3a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1h-1z" />
          </svg>&nbsp;</button>
        <ul class="dropdown-menu" style="background-color:#E3BEC6 ;">
          <li><button class="dropdown-item" name="kategori_turun" type="submit">Kategori</button></li>
          <li><button class="dropdown-item" name="baterai_turun" type="submit">Baterai</button></li>
        </ul>
      </div>
    </div>
  </div>
</form>