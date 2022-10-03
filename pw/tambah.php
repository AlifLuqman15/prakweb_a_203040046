<?php
// Alif Luqman
require 'functions.php';

if (isset($_POST['tambah'])) {
  if (tambah($_POST) > 0) {
    echo "<script>
          alert('data berhasil ditambahkan');
          document.location.href = 'index.php';
          </script>";
  } else {
    echo "data gagal ditambahkan!";
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Data Buku</title>
</head>

<body>
  <h3>Form Tambah Data Buku</h3>
  <form action="" method="POST">
    <ul>
      <li>
        <label>
          Nama Buku :
          <input type="text" name="nama_buku" autofocus required>
        </label>
      </li>
      <li>
        <label>
          Nama Pengarang :
          <input type="text" name="nama_pengarang" required>
        </label>
      </li>
      <li>
        <label>
          Jumlah Halaman :
          <input type="text" name="jumlah_halaman" required>
        </label>
      </li>
      <li>
        <label>
          Harga Buku :
          <input type="text" name="harga_buku" required>
        </label>
      </li>
      <li>
        <label>
          Gambar
          <input type="file" name="gambar" required class="gambar" onchange="previewImage()">
        </label>
        <img src="image/nophoto.png" width="120" style="display: block;" class="img-preview">
      </li>
      <li>
        <button type="submit" name="tambah">Tambah Data</button>
      </li>
    </ul>
  </form>
  <script src="script.js"></script>
</body>

</html>