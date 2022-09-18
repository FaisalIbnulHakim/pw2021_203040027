<?php
require 'functions.php';

if (isset($_POST['registrasi'])) {
  if (registrasi($_POST) > 0) {
    echo "<script>
            alert('user baru berhasil ditambahkan. silahkan login!');
            document.location.href = 'login.php';
           </script>";
  } else {
    echo 'user gagal ditambahkan!';
  }
}
?>

<html lang="en">

<head>
  <meta charset="UTF-8" />
  <title>Register</title>
  <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

</head>

<body class="bg-blue-50">

  <svg class="fixed hidden lg:block inset-0 h-full" style="z-index: -1;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
    <path fill="#3b82f6" fill-opacity="1" d="M0,192L21.8,197.3C43.6,203,87,213,131,213.3C174.5,213,218,203,262,213.3C305.5,224,349,256,393,266.7C436.4,277,480,267,524,229.3C567.3,192,611,128,655,106.7C698.2,85,742,107,785,101.3C829.1,96,873,64,916,48C960,32,1004,32,1047,74.7C1090.9,117,1135,203,1178,202.7C1221.8,203,1265,117,1309,101.3C1352.7,85,1396,139,1418,165.3L1440,192L1440,320L1418.2,320C1396.4,320,1353,320,1309,320C1265.5,320,1222,320,1178,320C1134.5,320,1091,320,1047,320C1003.6,320,960,320,916,320C872.7,320,829,320,785,320C741.8,320,698,320,655,320C610.9,320,567,320,524,320C480,320,436,320,393,320C349.1,320,305,320,262,320C218.2,320,175,320,131,320C87.3,320,44,320,22,320L0,320Z"></path>
  </svg>

  <div class="w-screen h-screen flex flex-col justify-center items-center lg:grid lg:grid-cols-2">
    <form action="" method="POST" class="flex flex-col justify-center -mt-36 items-center lg:ml-36 lg:mx-0 mx-auto w-1/2">
      <img src="../assets/undraw/profile.svg" class="w-32" />
      <h2 class="my-8 font-display font-bold text-3xl text-gray-700 text-center">
        Create Account
      </h2>
      <div class="relative ">
        <i class="pl-1 fa fa-user absolute text-blue-400 text-xl"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
          </svg></i>
        <input type="text" name="username" placeholder="username" class="pl-8 border-b-2 font-display focus:outline-none focus:border-blue-500 transition-all duration-500  text-lg" />
      </div>
      <div class="relative mt-8 ">
        <i class="pl-1 absolute text-blue-400 text-xl"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 11V7a4 4 0 118 0m-4 8v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2z" />
          </svg></i>
        <input type="password" name="password1" placeholder="password" class="pl-8 border-b-2 font-display focus:outline-none focus:border-blue-500 transition-all duration-500 text-lg" />
      </div>
      <div class="relative mt-8 ">
        <i class="pl-1 absolute text-blue-400 text-xl"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
          </svg></i>
        <input type="password" name="password2" placeholder="re-enter password" class="pl-8 border-b-2 font-display focus:outline-none focus:border-blue-500 transition-all duration-500 text-lg" />
      </div>
      <p class="mt-4 text-gray-600 font-bold">Have Account <a href="login.php" class="text-blue-800">Login</a></p>
      <button name="registrasi" type="submit" class="py-3 px-20 bg-blue-400 rounded-full text-white font-bold uppercase text-lg mt-4 transform hover:translate-y-1 transition-all duration-500">Register</button>
    </form>
    <img src="../assets/undraw/resume.svg" class="hidden lg:block w-1/2 hover:scale-150 transition-all duration-500 transform" />
  </div>
</body>

</html>