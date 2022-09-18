<?php
session_start();
if (!isset($_SESSION["username"])) {
  header("Location: login.php");
  exit;
}

require 'functions.php';

if (isset($_POST['tambah'])) {
  if (tambah($_POST) > 0) {
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

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Insert Data</title>
  <link href="https://unpkg.com/tailwindcss/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-blue-400">
  <header class="max-w-lg mx-auto py-2">
    <h1 class="text-4xl font-bold text-white text-center">Insert Gaming Gear</h1>
  </header>

  <main class="bg-white rounded-3xl shadow-2xl mx-8 lg:mx-36 p-6">
    <section>
      <h3 class="font-bold text-2xl">Gaming Gear --> Insert Data</h3>
      <p class="text-gray-600 pt-2">Enter new data, to add the total gaming gear that is in the store</p>
    </section>

    <section class="mt-6">
      <form action="" method="POST" enctype="multipart/form-data">
        <div>
          <div class="md:flex md:space-x-4">
            <div class="mb-6 pt-3 bg-blue-300 rounded md:w-1/2">
              <label class="block text-black text-sm font-bold mb-2 ml-3" for="nama">Nama</label>
              <input type="text" name="nama" id="nama" class="pt-2 bg-blue-100 rounded w-full text-gray-700 focus:outline-none border-b-8 border-blue-100 focus:border-blue-600 transition duration-500 px-3 pb-3" required>
            </div>
            <div class="mb-6 pt-3 rounded bg-blue-300 md:w-1/2">
              <label class="block text-gray-700 text-sm font-bold mb-2 ml-3" for="harga">Harga</label>
              <input type="text" name="harga" id="harga" class="pt-2 bg-blue-100 rounded w-full text-gray-700 focus:outline-none border-b-8 border-blue-100 focus:border-blue-600 transition duration-500 px-3 pb-3" required>
            </div>
          </div>
          <div class="mb-6 pt-3 rounded bg-blue-300 w-full ">
            <label class="block text-gray-700 text-sm font-bold mb-2 ml-3" for="deskripsi">Deskripsi</label>
            <textarea id="deskripsi" name="deskripsi" class="pt-2 bg-blue-100 rounded w-full text-gray-700 focus:outline-none border-b-8 border-blue-100 focus:border-blue-600 transition duration-500 px-3 pb-3" required></textarea>
          </div>
          <div class="md:flex md:space-x-4">
            <div class="mb-6 pt-3 rounded bg-blue-300 md:w-1/2">
              <label class="block text-gray-700 text-sm font-bold mb-2 ml-3" for="gambar">Gambar</label>
              <input type="file" name="gambar" id="gambar" onchange="previewImage()" class="gambar pt-1 bg-blue-100 rounded w-full text-gray-700 focus:outline-none border-b-8 border-blue-100 focus:border-blue-600 transition duration-500 px-3 pb-3">
              <img src="../assets/img/nophoto.png" width="120" style="display: block;" class="img-preview mx-auto" alt="">
            </div>
            <div class="mb-6 pt-3 rounded bg-blue-300 md:w-1/2">
              <label class="block text-gray-700 text-sm font-bold mb-2 ml-3" for="tipe">Tipe</label>
              <select type="option" name="tipe" id="tipe" class="pt-3 bg-blue-100 rounded w-full text-gray-700 focus:outline-none border-b-8 border-blue-100 focus:border-blue-600 transition duration-500 px-3 pb-3" required>
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
            <button class="w-1/2 bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 rounded shadow-lg hover:shadow-xl transition duration-200" type="submit" name="tambah">Go Insert</button>
          </div>
        </div>
      </form>
    </section>
  </main>


  <script src="../js/script.js"></script>
</body>

</html>