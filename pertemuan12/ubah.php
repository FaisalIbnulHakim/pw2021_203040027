<?php
session_start();

if (!isset($_SESSION['login'])) {
  header("Location: login.php");
  exit;
}
require 'functions.php';

// jika tidak ada id di url
if (!isset($_GET['id'])) {
  header("Location: index.php");
  exit;
}
// ambil id dari url
$id = $_GET['id'];

// query mahasiswa berdasarkan id

$f = query("SELECT * FROM figure WHERE id = $id");

// cek apakah tombol udah sudah ditekan
if (isset($_POST['ubah'])) {
  if (ubah($_POST) > 0) {
    echo "<script>
                alert('Data Berhasil diubah!');
                document.location.href = 'index.php';
          </script>";
  } else {
    echo "<script>
                alert('Data Gagal diubah!');
                document.location.href = 'index.php';
          </script>";
  }
}
?>


<h3>Form Ubah Data Action Figure</h3>
<form action="" method="POST">
  <input type="hidden" name="id" value="<?= $f["id"]; ?>">
  <div class="container">
    <ul>
      <li>
        <label for="gambar">Gambar </label><br>
        <input type="file" name="gambar" id="gambar" required value="<?= $f["gambar"]; ?>"><br><br>
      </li>
      <li>
        <label for="nama">Nama </label><br>
        <input type="text" name="nama" id="nama" required value="<?= $f["nama"]; ?>"><br><br>
      </li>
      <li>
        <label for="fitur">Anime </label><br>
        <input type="text" name="anime" id="anime" required value="<?= $f["anime"]; ?>"><br><br>
      </li>
      <li>
        <label for="harga">Produksi </label><br>
        <input type="text" name="produksi" id="produksi" required value="<?= $f["produksi"]; ?>"><br><br>
      </li>
      <li>
        <label for="harga">Harga </label><br>
        <input type="text" name="harga" id="harga" required value="<?= $f["harga"]; ?>"><br><br>
      </li>
      <li>
        <label for="gender">Gender </label><br>
        <select name="gender" id="gender" required value="<?= $f["gender"]; ?>">
          <option value="">-----Gender-----</option>
          <option value="man">man</option>
          <option value="momen">women</option>
        </select>
      </li>
      <br>
      <button type="submit" name="ubah">Ubah Data!</button>
      <button type="submit">
        <a href="index.php">Kembali</a>
      </button>
    </ul>
  </div>
</form>