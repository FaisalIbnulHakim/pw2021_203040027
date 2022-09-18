<?php
session_start();
if (!isset($_SESSION['username'])) {
  header("Location: login.php");
  exit;
}
$id = $_GET['id'];

require 'functions.php';

$gr = query("SELECT * FROM gaminggear WHERE id = $id");

if (isset($_POST['ubah'])) {
  if (ubah($_POST) > 0) {
    echo "<script>
                alert('Data Berhasil diubah!');
                document.location.href = 'admin.php';
          </script>";
  } else {
    echo "<script>
                alert('Data Gagal diubah!');
                document.location.href = 'admin.php';
          </script>";
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Change Data</title>
  <link href="https://unpkg.com/tailwindcss/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-blue-400">
  <header class="max-w-lg mx-auto py-2">
    <h1 class="text-4xl font-bold text-white text-center">Change Gaming Gear</h1>
  </header>

  <main class="bg-white rounded-3xl shadow-2xl mx-8 lg:mx-36 p-6">
    <section>
      <h3 class="font-bold text-2xl">Gaming Gear --> Change Data</h3>
      <p class="text-gray-600 pt-2">Replace existing data to improve the results</p>
    </section>

    <section class="mt-6">
      <form method="POST" action="#" enctype="multipart/form-data">
        <div>
          <input type="hidden" name="id" id="id" value="<?= $gr['id']; ?>">
          <div class="md:flex md:space-x-4">
            <div class="mb-6 pt-3 bg-blue-300 rounded md:w-1/2">
              <label class="block text-black text-sm font-bold mb-2 ml-3" for="nama">Nama</label>
              <input value="<?= $gr['nama']; ?>" name="nama" type="text" id="nama" class="pt-2 bg-blue-100 rounded w-full text-gray-700 focus:outline-none border-b-8 border-blue-100 focus:border-blue-600 transition duration-500 px-3 pb-3" required>
            </div>
            <div class="mb-6 pt-3 rounded bg-blue-300 md:w-1/2">
              <label class="block text-gray-700 text-sm font-bold mb-2 ml-3" for="harga">Harga</label>
              <input value="<?= $gr['harga']; ?>" name="harga" type="text" id="harga" class="pt-2 bg-blue-100 rounded w-full text-gray-700 focus:outline-none border-b-8 border-blue-100 focus:border-blue-600 transition duration-500 px-3 pb-3" required>
            </div>
          </div>
          <div class="mb-6 pt-3 rounded bg-blue-300 w-full ">
            <label class="block text-gray-700 text-sm font-bold mb-2 ml-3" for="deskripsi">Deskripsi</label>
            <textarea name="deskripsi" id="deskripsi" class="pt-2 bg-blue-100 rounded w-full text-gray-700 focus:outline-none border-b-8 border-blue-100 focus:border-blue-600 transition duration-500 px-3 pb-3" required><?= htmlspecialchars($gr['deskripsi']); ?></textarea>
          </div>
          <div class="md:flex md:space-x-4">
            <div class="mb-6 pt-3 rounded bg-blue-300 md:w-1/2">
              <input type="hidden" name="gambar_lama" value="<?= $gr['gambar']; ?>">
              <label class="block text-gray-700 text-sm font-bold mb-2 ml-3" for="gambar">Gambar</label>
              <input type="file" name="gambar" id="gambar" onchange="previewImage()" class="gambar pt-1 bg-blue-100 rounded w-full text-gray-700 focus:outline-none border-b-8 border-blue-100 focus:border-blue-600 transition duration-500 px-3 pb-3">
              <img src="../assets/img/<?= $gr['gambar']; ?>" width="250" style="display: block;" class="img-preview mx-auto" alt="">
            </div>
            <div class="mb-6 pt-3 rounded bg-blue-300 md:w-1/2">
              <label class="block text-gray-700 text-sm font-bold mb-2 ml-3" for="tipe">Tipe</label>
              <select value="<?= $gr['tipe']; ?>" name="tipe" type="option" id="gambar" class="pt-3 bg-blue-100 rounded w-full text-gray-700 focus:outline-none border-b-8 border-blue-100 focus:border-blue-600 transition duration-500 px-3 pb-3" required>
                <option value=""></option>
                <option value="Headset">Headset</option>
                <option value="Keyboard">Keyboard</option>
                <option value="Mouse">Mouse</option>
              </select>
            </div>
          </div>

          <div>
            <a href="admin.php" class="text-sm text-blue-600 hover:text-blue-900 hover:underline mb-6 ">Back</a>
          </div>
          <div class="flex justify-center">
            <button name="ubah" onclick="return confirm('Benar ingin Mengubah Data')" class="w-1/2 bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 rounded shadow-lg hover:shadow-xl transition duration-200" type="submit">Go Change</button>
          </div>
        </div>
      </form>
    </section>
  </main>

  <script src="../js/script.js"></script>
</body>

</html>