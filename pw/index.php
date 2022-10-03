<?php
// Alif Luqman Hakim
// 203040046
require 'functions.php';
$buku = query("SELECT * FROM buku");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Buku</title>
  <link rel="stylesheet" href="../pw/css.css">
</head>

<body>
  <h1>Daftar Buku</h1>

  <a href="tambah.php"><button class="kotak">Tambah Data Buku</a>
  <br><br>

  <table border="1" cellpaddling="10" cellspacing="0">
    <tr>
      <th>No</th>
      <th>Nama Buku</th>
      <th>Nama Pengarang</th>
      <th>Jumlah Halaman</th>
      <th>Harga Buku</th>
      <th>Gambar</th>
    </tr>

    <?php $i = 1;
    foreach ($buku as $b) : ?>

      <tr>
        <td><?= $i++; ?></td>
        <td><?= $b['nama_buku']; ?></td>
        <td><?= $b['nama_pengarang']; ?></td>
        <td><?= $b['jumlah_halaman']; ?></td>
        <td><?= $b['harga_buku']; ?></td>
        <td><img src="image/<?= $b['gambar']; ?>" width="150"></td>
        <td>
          <a href="ubah.php?no=<?= $b['no']; ?>">Ubah</a> | <a href="hapus.php?no=<?= $b['no']; ?>" onclick="return confirm ('apakah anda yakin?');">Hapus</a>
        </td>
      </tr>
    <?php endforeach; ?>
  </table>


</body>

</html>