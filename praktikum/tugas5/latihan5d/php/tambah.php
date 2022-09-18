<?php
require 'functions.php';

if (isset($_POST['tambah'])) {
  if (tambah($_POST) > 1) {
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
}
?>

<link rel="stylesheet" href="../css/tambah.css">
<h3>Form Tambah Data GamingGear</h3>
<form action="" method="POST">
  <div class="container">
    <ul>
      <li>
        <label for="gambar">Gambar </label><br>
        <input type="text" name="gambar" id="gambar" required><br><br>
      </li>
      <li>
        <label for="nama">Nama </label><br>
        <input type="text" name="nama" id="nama" required><br><br>
      </li>
      <li>
        <label for="fitur">Deskripsi </label><br>
        <input type="text" name="deskripsi" id="deskripsi" required><br><br>
      </li>
      <li>
        <label for="harga">Harga </label><br>
        <input type="text" name="harga" id="harga" required><br><br>
      </li>
      <li>
        <label for="type">Type </label><br>
        <select name="type" id="type" required>
          <option value="">-----Type GamingGear-----</option>
          <option value="Headset">Headset</option>
          <option value="Keyboard">Keyboard</option>
          <option value="Mouse">Mouse</option>
        </select>
      </li>
      <br>
      <button type="submit" name="tambah">Tambah Data!</button>
      <button type="submit">
        <a href="../php/admin.php" style="text-decoration: none; color: #f27b50; font-weight: 600;">Kembali</a>
      </button>
    </ul>
  </div>
</form>