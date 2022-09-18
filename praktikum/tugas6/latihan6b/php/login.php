<?php
session_start();
require 'functions.php';
// melakukan pengecekan apakah user melakukan Login jika redirect ke halaman admin
if (isset($_SESSION['username'])) {
  header("Location: admin.php");
  exit;
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

      if (hash('sha256', $row['id']) == $_SESSION['hash']) {
        header("Location: admin.php");
        die;
      }
      header("Location: ../index.php");
      die;
    }
  }
  $error = true;
}
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

<form action="" method="POST" style="margin-left: 25px;">
  <?php if (isset($error)) : ?>
    <p style="color: red; font-style:italic;">Username dan Password salah</p>
  <?php endif; ?>
  <table style="margin-left: 50px;">
    <tr>
      <h2 style="color: turquoise;">Masukan Username dan Passsword</h2>
    </tr>
    <tr>
      <td><label for="username"><span class="badge bg-success">Username</span></label></td>
      <td>:</td>
      <td><input type="text" name="username"></td>
    </tr>
    <tr>
      <td><label for="password"><span class="badge bg-success">Password</span></label></td>
      <td>:</td>
      <td><input type="password" name="password"></td>
    </tr>
  </table>
  <div class="remember">
    <input type="checkbox" name="remember">
    <label for="remember"><span style="font-weight: bold;">Remember me</span></label>
  </div>
  <button style="margin-top: 15px;margin-left: 55px;" type="submit" name="submit" class="btn btn-primary">Login</button>
  <div class="registrasi">
    <p style="font-weight: bold;margin-top:15px;">Belum punya akun ? Registrasi <a href="registrasi.php">Disini</a></p>
  </div>
</form>