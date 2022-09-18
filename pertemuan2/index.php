<?php
/*
Faisal Ibnul Hakim
203040027
https://github.com/FaisalHakim081/pw2021_2030400278
pertemuan 2 - 7 Februari 2021
mempelajari mengenai sintaks PHP 
*/
?>

<?php
// Standar Output
// echo, print
// print_r
// var_dump

// Penulisan Sintaks PHP
// 1. PHP di dalam HTML
// 2. HTML di dalam PHP

// Variabel dan Tipe Data
// Variabel
// tidak boleh diawali dengan angka, tapi boleh mengandung angka
/*
$nama = "Faisal Ibnul Hakim";
echo "Halo, nama saya $nama";
*/

// Operator
// Aritmatika
//+ - * / %
// $x = 10;
// $y = 20;
// echo $x * $y;

// Penggabung string / concatenation / contact
// .
/*
$nama_depan = "Faisal";
$nama_tengah = "Ibnul";
$nama_akhir = "Hakim";
echo $nama_depan . " " . $nama_tengah ." ". $nama_akhir;
*/

// Assignment
// =, +=, -=, *=. /=, %=, .=
/* 
$x = 1;
$x -= 5;
echo $x;
*/

/*
$nama = "Faisal";
$nama .= " "; 
$nama .= "Ibnul";
$nama .= " "; 
$nama .= "Hakim"; 
echo $nama;
*/

// Perbandingan
// <, >, <=, >=, ==, !=
//var_dump(1=="1");

// identitas
// ===, !==
//var_dump(1=="1");

// Logika
// &&, ||, !
/*
$x = 30;
var_dump ($x < 20 || $x % 2 ==0);
*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Belajar PHP</title>
</head>
<body>
    <h1>Halo, Selamat Datang <?php echo "Faisal" ?></h1>
</body>
</html>
