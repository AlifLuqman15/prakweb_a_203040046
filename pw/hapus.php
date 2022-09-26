<?php

// session_start();

// if (!isset($_SESSION['login'])) {
//   header("Location: login.php");
//   exit;
// }

require 'functions.php';

// jika tidak ada id di url
if (!isset($_GET['no'])) {
  header("Location: index.php");
  exit;
}

// mengambil id dari url
$id = $_GET['no'];

if (hapus($id) > 0) {
  echo "<script>
    alert('data berhasil dihapus');
    document.location.href = 'index.php';
    </script>";
} else {
  echo "data gagal dihapus";
}
