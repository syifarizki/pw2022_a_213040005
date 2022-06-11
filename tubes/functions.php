<?php
function koneksi()
{
    return mysqli_connect('localhost', 'root', '', 'pw2022_213040005');
}

function query($query)
{
    $conn = koneksi();
    $result = mysqli_query($conn, $query);

    // jika hasilnya hanya 1 data
    if (mysqli_num_rows($result) == 1) {
        return mysqli_fetch_assoc($result);
    }

    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}


function upload()
{
    $nama_file = $_FILES['gambar']['name'];
    $tipe_file = $_FILES['gambar']['type'];
    $ukuran_file = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmp_file =  $_FILES['gambar']['tmp_name'];

    // ketika tidak ada gambar yang dipilih
    // 4 adalah angka error
    if ($error == 4) {
        //   echo"<script>
        //          alert('Pilih gambar terlebih dahulu!');
        //        </script>";  
        return 'nophoto.jpg';
    }


    // cek ekstensi file
    $daftar_gambar = ['jpg', 'jpeg', 'png'];
    $ekstensi_file = explode('.', $nama_file);
    $ekstensi_file = strtolower(end($ekstensi_file));
    if (!in_array($ekstensi_file, $daftar_gambar)) {
        echo "<script>
        alert('Yang anda pilih bukan gambar!');
      </script>";
        return false;
    }


    // cek tipe file
    if ($tipe_file != 'image/jpeg' && $tipe_file != 'image/png') {
        echo "<script>
        alert('Yang anda pilih bukan gambar!');
      </script>";
        return false;
    }


    // cek ukuran file
    // maksimal 5Mb = 5000000
    if ($ukuran_file > 5000000) {
        echo "<script>
                alert('Ukuran gambar terlalu besar!');
             </script>";
        return false;
    }

    // lolos pengecekan
    // siap upload file
    // generate nama file baru
    $nama_file_baru = uniqid();
    $nama_file_baru .= '.';
    $nama_file_baru .= $ekstensi_file;
    move_uploaded_file($tmp_file, 'img/' . $nama_file_baru);

    return $nama_file_baru;
}


function tambah($data)
{
    $conn = koneksi();

    $tipe = htmlspecialchars($data['tipe']);
    $kategori = htmlspecialchars($data['kategori']);
    $memori = htmlspecialchars($data['memori']);
    $rear_camera = htmlspecialchars($data['rear_camera']);
    $front_camera = htmlspecialchars($data['front_camera']);
    $baterai = htmlspecialchars($data['baterai']);
    $harga = htmlspecialchars($data['harga']);
    // $gambar = htmlspecialchars($data['gambar']);

    // upload gambar
    $gambar = upload();
    if (!$gambar) {
        return false;
    }

    $query = "INSERT INTO
              produk
              VALUES
              (null,'$tipe','$kategori','$memori','$rear_camera','$front_camera','$baterai','$harga','$gambar');
              ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}


function hapus($id_produk)
{
    $conn = koneksi();

    // menghapus gambar difolder gambar
    $prd = query("SELECT * FROM produk WHERE id_produk = $id_produk");
    if ($prd['gambar'] != 'nophoto.jpg') {
        unlink('img/' . $prd['gambar']);
    }

    mysqli_query($conn, "DELETE FROM produk WHERE id_produk = $id_produk") or die(mysqli_error($conn));
    return mysqli_affected_rows($conn);
}


function ubah($data)
{
    $conn = koneksi();

    $id_produk = $data['id_produk'];
    $tipe = htmlspecialchars($data['tipe']);
    $kategori = htmlspecialchars($data['kategori']);
    $memori = htmlspecialchars($data['memori']);
    $rear_camera = htmlspecialchars($data['rear_camera']);
    $front_camera = htmlspecialchars($data['front_camera']);
    $baterai = htmlspecialchars($data['baterai']);
    $harga = htmlspecialchars($data['harga']);
    $gambar_lama = htmlspecialchars($data['gambar_lama']);

    $gambar = upload();
    if (!$gambar) {
        return false;
    }

    if ($gambar == 'nophoto.jpg') {
        $gambar = $gambar_lama;
    }


    $query = "UPDATE produk SET   
              tipe = '$tipe',
              kategori = '$kategori',   
              memori = '$memori',
              rear_camera = '$rear_camera',
              front_camera = '$front_camera',
              baterai = '$baterai',
              harga ='$harga',
              gambar ='$gambar'
              WHERE id_produk = $id_produk
              ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function cari($keyword)
{
    $conn = koneksi();

    $query = "SELECT * FROM produk
              WHERE 
              tipe LIKE '%$keyword%' ";


    $result = mysqli_query($conn, $query);

    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}


function login($data)
{
    $conn = koneksi();

    $username = htmlspecialchars($data['username']);
    $password = htmlspecialchars($data['password']);

    // cek username
    if ($user = query("SELECT * FROM user WHERE username = '$username'")) {
        // cek password
        if (password_verify($password, $user['password'])) {
            // set session
            $_SESSION['login'] = true;

            header("Location: admin.php");
            exit;
        }
    }
    return [
        'error' => true,
        'pesan' => 'Incorrect username or password'
    ];
}

function registrasi($data)
{
    $conn = koneksi();

    $username = htmlspecialchars(strtolower($data['username']));
    $password1 = mysqli_real_escape_string($conn, $data['password1']);
    $password2 = mysqli_real_escape_string($conn, $data['password2']);

    //jika username dan password kosong
    if (empty($username) || empty($password1) || empty($password2)) {
        echo " <script>
                 alert('Username atau password tidak boleh kosong');
                 document.location.href= 'registrasi.php';
               </script>";
        return false;
    }

    // jika username sudah ada
    if (query("SELECT * FROM user WHERE username = '$username'")) {
        echo "<script>
               alert('Username sudah ada');
               document.location.href= 'registrasi.php';
              </script>";
        return false;
    }

    // jika konfirmasi password tidak sesuai
    if ($password1 !== $password2) {
        echo "<script>
               alert('Konfirmasi password salah');
               document.location.href= 'registrasi.php';
              </script>";
        return false;
    }

    // jika password < 5 digit
    if (strlen($password1) < 5) {
        echo "<script>
               alert('Password terlalu pendek');
               document.location.href= 'registrasi.php';
              </script>";
        return false;
    }

    // jika usernam dan password sudah sesuai
    // enkripsi password
    $password_baru = password_hash($password1, PASSWORD_DEFAULT);
    // insert ke tabel user
    $query = "INSERT INTO user
              VALUES 
              (null, '$username', '$password_baru')
              ";
    mysqli_query($conn, $query) or die(mysqli_error($conn));
    return mysqli_affected_rows($conn);
}
