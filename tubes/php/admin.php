<?php
session_start();
if (!isset($_SESSION['username'])) {
  header("Location: login.php");
  exit;
}
require 'functions.php';
$gear = query("SELECT * FROM gaminggear");

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin</title>
  <link rel="stylesheet" href="https://unpkg.com/tailwindcss/dist/tailwind.min.css" />
</head>

<body>
  <section id="nav">
    <nav id="header">
      <div class="w-full flex justify-center lg:items-center lg:mt-0 bg-blue-400 border-b-2 border-white text-white p-4 z-20">
        <ul>
          <li><a class=" text-white no-underline hover:no-underline font-bold text-2xl lg:text-3xl">Admin Page</a></li>
        </ul>
      </div>
    </nav>
  </section>
  <div class="bg-blue-300">
    <div class="flex lg:justify-start justify-center ml-4">
      <div class="pt-4">
        <h4 class="text-white text-xl w-max font-bold border-b-2 border-blue-300 hover:border-blue-500"><a href="tambah.php">Tambah Data</a></h4>
      </div>
      <div class="pt-4 ml-6">
        <h4 class="text-white text-xl w-max font-bold border-b-2 border-blue-300 hover:border-blue-500"><a href="shop.php">Store Page</a></h4>
      </div>
    </div>
    <div class="container">
      <section id="main" class="grid md:grid-cols-6 mt-4 p-4">
        <?php foreach ($gear as $gr) : ?>
          <div class="md:col-span-2 block mt-10 ">
            <img src="../assets/img/<?= $gr["gambar"]; ?>" alt="" class="w-4/5 lg:mx-0 mx-auto hover:shadow-lg box-border border-2 border-gray-400 py-4 rounded-2xl bg-blue-100 shadow-inner">
            <div class="md:ml-16 mt-5 ml-28 ">
              <a href="ubah.php?id=<?= $gr['id']; ?>" class="bg-blue-900 text-gray-50 text-xl font-bold rounded-full p-2 cursor-pointer w-max hover:bg-white hover:text-blue-600 transition ease-out duration-500">CHANGE</a>
              <a href="hapus.php?id=<?= $gr['id']; ?>" onclick="return confirm('Hapus Data??')" class="ml-10 bg-blue-900 text-gray-50 text-xl font-bold rounded-full p-2 cursor-pointer w-max hover:bg-white hover:text-blue-600 transition ease-out duration-500">DELETE</a>
            </div>
          </div>
          <div class="md:col-span-4 border-double border-8 bg-blue-200 border-gray-400 text-gray-700 rounded-3xl shadow-inner mt-10 ">
            <div class="ml-3 mt-2 font-bold">
              <p>Id: <?= $gr['id'] ?></p>
              <br>
              <h3>Nama: <?= $gr["nama"]; ?></h3>
              <br>
              <p>Harga: <?= $gr["harga"]; ?></p>
              <br>
              <p>Deskripsi: <?= $gr["deskripsi"] ?></p>


            </div>
          </div>
        <?php endforeach; ?>
      </section>
    </div>
  </div>
  <script src="../js/admin.js"></script>
</body>

</html>