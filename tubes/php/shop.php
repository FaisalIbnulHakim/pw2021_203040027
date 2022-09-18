<?php
require 'functions.php';
$gear = query("SELECT * FROM gaminggear");
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
  <title>G.G</title>
  <style>
    @font-face {
      font-family: 'kara';
      src: url('../assets/font/kara/Karasha.ttf');
    }

    @font-face {
      font-family: 'nuku';
      src: url('../assets/font/nuku/nuku1.ttf');
    }

    @font-face {
      font-family: 'fuji';
      src: url('../assets/font/fujimaru/Fujimaru.ttf');
    }

    #gear,
    #footer {
      font-family: 'kara';
    }

    #gamer {
      font-family: 'fuji';
    }

    #buy {
      font-family: 'nuku';
    }
  </style>
</head>

<body class="text-gray-500 font-sans">

  <div class="grid md:grid-cols-6">
    <div class="md:col-span-1 bg-gray-500 md:flex md:justify-end">
      <nav class="text-right lg:fixed">
        <div class="flex justify-between items-center">
          <h1 class="font-bold p-4 border-b border-gray-100 justify-center">
            <a class="text-white cursor-pointer hover:text-blue-400" id="burger">Fiuls G.G</a>
          </h1>
        </div>
        <ul class="text-sm hidden md:block mt-4 mr-2 " id="menu">
          <li class="text-white hover:text-blue-400 font-bold mt-3">
            <a href="../home.php" class="px-4 flex lg:justify-end">
              <span>Home</span>
              <svg class="w-5 ml-2" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z" />
              </svg>
            </a>
          </li>
          <li class="text-white hover:text-blue-400 font-bold mt-3">
            <a href="admin.php" class="px-4 flex lg:justify-end">
              <span>Admin</span>
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
              </svg>
            </a>
          </li>
          <li class="text-white hover:text-blue-400 font-bold mt-3">
            <a href="login.php" class="px-4 flex lg:justify-end">
              <span>Login</span>
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1" />
              </svg>
            </a>
          </li>
          <li class="text-white hover:text-blue-400 font-bold mt-3">
            <a href="logout.php" class="px-4 flex lg:justify-end">
              <span>Logout</span>
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
              </svg>
            </a>
          </li>
          <li class="text-white hover:text-blue-400 font-bold mt-3 pb-4">
            <a href="#" class="px-4 flex lg:justify-end ">
              <span>Contact</span>
              <svg class="w-5 ml-2" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" />
              </svg>
            </a>
          </li>
        </ul>
      </nav>
    </div>

    <main class="px-16 py-6 bg-blue-100 md:col-span-5">
      <header>
        <h2 id="gear" class="tracking-widest text-blue-600 text-6xl font-semibold uppercase lg:flex justify-center">Gaming Gear</h2>
        <h3 id="gamer" class=" text-4xl text-blue-600 font-semibold mt-6 lg:flex justify-center">For Gamer</h3>
      </header>

      <div>
        <h4 id="buy" class="tracking-wide text-blue-400 font-bold mt-12 pb-2 border-b-2 border-blue-700">Buy Now</h4>

        <form action="" method="POST">
          <div class="flex justify-start mt-9 bg-blue-200 p-1 max-w-max border-2 border-gray-400 rounded-md">
            <input type="text" name="keyword" size="25" placeholder="Masukan Nama GamingGear" autocomplete="off" autofocus class="keyword bg-transparent border-transparent transition-all duration-500 text-blue-900 border-b-2 focus:border-blue-700 flex focus:outline-none pl-2">
            <button type="submit" name="cari" class="tombol-cari">cari</button>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 ml-2 mt-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
            </svg>
          </div>
        </form>

        <div class="container">
          <div class="mt-8 md:-ml-4 grid sm:grid-cols-1 lg:grid-cols-3 gap-10">
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
        </div>

        <h4 id="buy" class="tracking-wide text-blue-400 font-bold mt-12 pb-2 border-b-2 border-blue-700">Contact Us</h4>
        <li class="text-blue-500 font-bold list-none mt-4">
          <a href="#" class="px-4 flex justify-start">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
            </svg>
            <span class="ml-2">Phone: +62 829-2819-2902</span>
          </a>
        </li>
        <li class="text-blue-500 font-bold list-none mt-4">
          <a href="#" class="px-4 flex justify-start">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
            </svg>
            <span class="ml-2">Email: kamhakim2@gmail.com</span>
          </a>
        </li>
        <div id="footer" class="flex justify-center pt-4 font-bold text-blue-600 text-2xl lg:text-3xl">
          Copyright | Faisal Ibnul Hakim
        </div>
      </div>
    </main>

  </div>

  <script src="../js/shop.js"></script>
</body>

</html>