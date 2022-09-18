<?php
session_start();

if (!isset($_SESSION['login'])) {
  header("Location: login.php");
  exit;
}
require 'functions.php';

if (isset($_POST['tambah'])) {
  if (tambah($_POST) > 0) {
    echo "<script>
                alert('Data Berhasil ditambahkan!');
                document.location.href = 'index.php';
          </script>";
  } else {
    echo "<script>
                alert('Data Gagal ditambahkan!');
          </script>";
  }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h3>Form Tambah Data Action Figure</h3>
  <form action="" method="POST" enctype="multipart/form-data">
    <div class="container">
      <ul>
        <li>
          <label for="gambar">Gambar </label><br>
          <input type="file" name="gambar" id="gambar" class="gambar" onchange="previewImage()"><br><br>
          <img src="img/nophoto.png" width="120" style="display: block;" class="img-preview" alt="">
        </li>
        <li>
          <label for="nama">Nama </label><br>
          <input type="text" name="nama" id="nama" required><br><br>
        </li>
        <li>
          <label for="fitur">Anime </label><br>
          <input type="text" name="anime" id="anime" required><br><br>
        </li>
        <li>
          <label for="harga">Produksi </label><br>
          <input type="text" name="produksi" id="produksi" required><br><br>
        </li>
        <li>
          <label for="harga">Harga </label><br>
          <input type="text" name="harga" id="harga" required><br><br>
        </li>
        <li>
          <label for="gender">Gender </label><br>
          <select name="gender" id="gender" required>
            <option value="">-----Gender-----</option>
            <option value="man">man</option>
            <option value="momen">women</option>
          </select>
        </li>
        <br>
        <button type="submit" name="tambah">Tambah Data!</button>
        <button type="submit">
          <a href="index.php">Kembali</a>
        </button>
      </ul>
    </div>
  </form>

  <script src="js/script.js"></script>
</body>

</html>