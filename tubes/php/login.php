<?php
session_start();
require 'functions.php';
// melakukan pengecekan apakah user melakukan Login jika redirect ke halaman admin
if (isset($_SESSION['username'])) {
  header("Location: shop.php");
  exit;
}
// cek cookie
if (isset($_COOKIE['username']) && isset($_COOKIE['hash'])) {
  $username = $_COOKIE['username'];
  $hash = $_COOKIE['hash'];

  // ambil username berdasarkan id
  $result = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username'");
  $row = mysqli_fetch_assoc($result);

  // cek cookie dan username
  if ($hash === hash('sha256', $row['id'], false)) {
    $_SESSION['username'] = $row['username'];
    header("Location: shop.php");
    exit;
  }
}
// Login
if (isset($_POST['submit'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];
  $cek_user = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username'");
  // mencocokan USERNAME dan PASSWORD
  if (mysqli_num_rows($cek_user) > 0) {
    $row = mysqli_fetch_assoc($cek_user);
    if (password_verify($password, $row['password'])) {
      $_SESSION['username'] = $_POST['username'];
      $_SESSION['hash'] = hash('sha256', $row['id'], false);

      if (isset($_POST['remember'])) {
        setcookie('username', $row['username'], time() + 60 * 60 * 24);
        $hash = hash('sha256', $row['id']);
        setcookie('hash', $hash, time() + 60 * 60 * 24);
      }

      if (hash('sha256', $row['id']) == $_SESSION['hash']) {
        header("Location: shop.php");
        die;
      }
      header("Location: shop.php");
      die;
    }
  }
  $error = true;
}
?>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <title>Login project</title>
  <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

</head>

<body class="bg-blue-50">

  <svg class="fixed hidden lg:block inset-0 h-full" style="z-index: -1;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
    <path fill="#3b82f6" fill-opacity="1" d="M0,0L15,48C30,96,60,192,90,245.3C120,299,150,309,180,304C210,299,240,277,270,261.3C300,245,330,235,360,240C390,245,420,267,450,250.7C480,235,510,181,540,154.7C570,128,600,128,630,144C660,160,690,192,720,202.7C750,213,780,203,810,176C840,149,870,107,900,101.3C930,96,960,128,990,149.3C1020,171,1050,181,1080,160C1110,139,1140,85,1170,101.3C1200,117,1230,203,1260,197.3C1290,192,1320,96,1350,58.7C1380,21,1410,43,1425,53.3L1440,64L1440,320L1425,320C1410,320,1380,320,1350,320C1320,320,1290,320,1260,320C1230,320,1200,320,1170,320C1140,320,1110,320,1080,320C1050,320,1020,320,990,320C960,320,930,320,900,320C870,320,840,320,810,320C780,320,750,320,720,320C690,320,660,320,630,320C600,320,570,320,540,320C510,320,480,320,450,320C420,320,390,320,360,320C330,320,300,320,270,320C240,320,210,320,180,320C150,320,120,320,90,320C60,320,30,320,15,320L0,320Z"></path>
  </svg>

  <div class="w-screen h-screen flex flex-col justify-center items-center lg:grid lg:grid-cols-2">
    <img src="../assets/undraw/login.svg" class="hidden lg:block w-1/2 hover:scale-150 transition-all duration-500 transform mx-auto" />
    <form action="" method="POST" class="flex flex-col justify-center -mt-36 items-center w-1/2">
      <img src="../assets/undraw/profile.svg" class="w-32" />
      <h2 class="my-8 font-display font-bold text-3xl text-gray-700 text-center">
        Please Login
      </h2>
      <?php if (isset($error)) : ?>
        <p class="font-bold text-blue-600 -mt-6 pb-4 font-mono">Username Atau Password Salah</p>
      <?php endif; ?>
      <div class="relative ">
        <i class="pl-1 fa fa-user absolute text-blue-400 text-xl"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
          </svg></i>
        <input type="text" name="username" placeholder="username" class="pl-8 border-b-2 font-display focus:outline-none focus:border-blue-500 transition-all duration-500  text-lg" />
      </div>
      <div class="relative mt-8 ">
        <i class="pl-1 absolute text-blue-400 text-xl"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
          </svg></i>
        <input type="password" name="password" placeholder="password" class="pl-8 border-b-2 font-display focus:outline-none focus:border-blue-500 transition-all duration-500 text-lg" />
      </div>
      <p class="self-end mt-4 text-gray-600 font-bold">Don't have account?<a href="registrasi.php" class="text-blue-800"> Register</a> here or <a href="shop.php" class="text-blue-800">Guest</a></p>
      <button name="submit" class="py-3 px-20 bg-blue-400 rounded-full text-white font-bold uppercase text-lg mt-4 transform hover:translate-y-1 transition-all duration-500">Login</button>
    </form>
  </div>
</body>

</html>