<?php
require 'functions.php';

$no = $_GET['no'];

$b = query("SELECT * FROM buku WHERE no = $no");

if (isset($_POST['ubah'])) {
  if (ubah($_POST) > 0) {
    echo "<script>
          alert('data berhasil diubah');
          document.location.href = 'index.php';
          </script>";
  } else {
    echo "data gagal diubah!";
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ubah Data Buku</title>
</head>

<body>
  <h3>Form Ubah Data Buku</h3>
  <form action="" method="POST">
    <input type="hidden" name="no" value="<?= $b['no']; ?>">
    <ul>
      <li>
        <label>
          Nama Buku :
          <input type="text" name="nama_buku" autofocus required value="<?= $b['nama_buku']; ?>">
        </label>
      </li>
      <li>
        <label>
          Nama Pengarang :
          <input type="text" name="nama_pengarang" required value="<?= $b['nama_pengarang']; ?>">
        </label>
      </li>
      <li>
        <label>
          Jumlah Halaman :
          <input type="text" name="jumlah_halaman" required value="<?= $b['jumlah_halaman']; ?>">
        </label>
      </li>
      <li>
        <label>
          Harga Buku :
          <input type="text" name="harga_buku" required value="<?= $b['harga_buku']; ?>">
        </label>
      </li>
      <li>
        <label>
          Gambar
          <input type="text" name="gambar" required value="<?= $b['gambar']; ?>">
        </label>
      </li>
      <li>
        <button type="submit" name="ubah">Ubah Data</button>
      </li>
    </ul>
  </form>
</body>

</html>