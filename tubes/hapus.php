<?php
session_start();

if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
}

require 'functions.php';

// jika tidak ada id di url
if (!isset($_GET['id_produk'])) {
    header("Location: index.php");
    exit;
}

// mengambil id dari url
$id_produk = $_GET['id_produk'];

if (hapus($id_produk) > 0) {
    echo "
    <script>
        alert('Data berhasil dihapus!');
        document.location.href='admin.php';
    </script>";
} else {
    echo "
       <script>
             alert('Data gagal dihapus!');
             document.location.href='admin.php';  
       </script>";
}
