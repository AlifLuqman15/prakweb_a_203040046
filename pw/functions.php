<?php
function koneksi()
{
  return mysqli_connect('localhost', 'root', '', 'prakweb_a_203040046_pw');
}

function query($query)
{
  // Query isi tabel mahasiswa
  $conn = koneksi();

  $result = mysqli_query($conn, $query);

  if (mysqli_num_rows($result) == 1) {
    return mysqli_fetch_assoc($result);
  }

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $rows;
}

function tambah($data)
{
  $conn = koneksi();

  $nama_buku = htmlspecialchars($data['nama_buku']);
  $nama_pengarang = htmlspecialchars($data['nama_pengarang']);
  $jumlah_halaman = htmlspecialchars($data['jumlah_halaman']);
  $harga_buku = htmlspecialchars($data['harga_buku']);
  $gambar = htmlspecialchars($data['gambar']);

  $query = "INSERT INTO
                  buku
                  values
                  (null, '$nama_buku', '$nama_pengarang', '$jumlah_halaman', '$harga_buku', '$gambar')";
  mysqli_query($conn, $query) or die(mysqli_error($conn));
  // echo mysqli_error($conn);
  return mysqli_affected_rows($conn);
}

function hapus($no)
{
  $conn = koneksi();
  mysqli_query($conn, "DELETE FROM buku WHERE no = $no") or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}

function ubah($data)
{
  $conn = koneksi();

  $no = $data['no'];
  $nama_buku = htmlspecialchars($data['nama_buku']);
  $nama_pengarang = htmlspecialchars($data['nama_pengarang']);
  $jumlah_halaman = htmlspecialchars($data['jumlah_halaman']);
  $harga_buku = htmlspecialchars($data['harga_buku']);
  $gambar = htmlspecialchars($data['gambar']);

  $query = "UPDATE buku SET
            nama_buku = '$nama_buku',
            nama_pengarang = '$nama_pengarang',
            jumlah_halaman = '$jumlah_halaman',
            harga_buku = '$harga_buku',
            gambar = '$gambar'
            WHERE no = $no";
  mysqli_query($conn, $query) or die(mysqli_error($conn));
  // echo mysqli_error($conn);
  return mysqli_affected_rows($conn);
}
