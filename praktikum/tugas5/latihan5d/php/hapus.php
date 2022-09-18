<?php
require 'functions.php';
$id = $_GET['id'];

if (hapus($id) > 0) {
  echo "<script>
                alert('Data Berhasil ditambahkan!');
                document.location.href = 'admin.php';
          </script>";
} else {
  echo "<script>
                alert('Data Gagal ditambahkan!');
                document.location.href = 'admin.php';
          </script>";
}
