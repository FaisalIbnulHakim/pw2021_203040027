<?php 
/*
Faisal Ibnul Hakim
203040027
https://github.com/FaisalHakim081/pw2021_203040027
pertemuan 4 - 21 Februari 2021
mempelajari mengenai sintaks PHP 
Function
time()
date()
mktime()
strtotime()
*/
?>

<?php
    function salam($waktu = "Datang", $nama = "Admin"){
        return "Selamat $waktu, $nama!";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Function</title>
</head>
<body>
    <h1><?= salam("pagi", "Faisal"); ?></h1>
</body>
</html>