<?php
require '../php/functions.php';
$gear = cari($_GET['keyword']);
?>
<div class="mt-8 md:-ml-4 grid sm:grid-cols-1 lg:grid-cols-3 gap-10">
  <?php if (empty($gear)) : ?>
    <div class="bg-blue-200 border-2 border-gray-400 rounded-md overflow-hidden shadow-lg p-4 w-max mb-5">
      <h2 class="lg:text-5xl">Data Tidak Ada</h2>
      <div class="m-4">
        <span class="block font-semibold text-gray-500 text-xl mt-12">Carilah nama Gear Yang Benar</span>
      </div>
    </div>
  <?php endif; ?>


  <?php foreach ($gear as $gr) : ?>
    <div class="bg-blue-200 border-2 border-gray-400 rounded-md overflow-hidden shadow-lg p-1 w-max mb-5">
      <img class="hover:shadow-lg box-border h-65 w-80 border-2 border-blue-300 py-4 rounded-lg bg-blue-100 shadow-inner" src="../assets/img/<?= $gr["gambar"]; ?>" alt="">
      <div class="m-4">
        <span class="font-bold text-gray-700"><?= $gr["nama"]; ?></span>
        <span class="block font-semibold text-gray-500 text-sm"><?= $gr["harga"]; ?></span>
      </div>
      <div class="flex justify-end">
        <div class="animate-pulse hover:shadow-md mr-3 mb-2 bg-blue-900 text-gray-50 text-xs font-bold rounded-full p-1 pr-2 cursor-pointer w-max">
          <svg class="w-4 inline-block " xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
          </svg>
          <a href="detail.php?id=<?= $gr['id'] ?>"><span>Check</span></a>
        </div>
      </div>
    </div>
  <?php endforeach; ?>
</div>