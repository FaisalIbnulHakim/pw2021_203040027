<?php 
/*
Faisal Ibnul Hakim
203040027
https://github.com/FaisalHakim081/pw2021_2030400278
pertemuan 7 - 18 Maret 2021
mempelajari mengenai sintaks PHP 
GET and POST
*/
?> 

<?php
// cek apakah tidak ada data di $_GET
if( !isset($_GET["nama"])  ||
    !isset($_GET["anime"])  ||
    !isset($_GET["produksi"])  ||
    !isset($_GET["harga"])  ||
    !isset($_GET["gambar"])) {
    // redirect
    header("Location: latihan1.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Detail Action Figure</title>
</head>
<body>

<ul>
    <li><img src="img/<?= $_GET["gambar"];?>"></li>
    <li><?= $_GET["nama"];?></li>
    <li><?= $_GET["anime"];?></li>
    <li><?= $_GET["produksi"];?></li>
    <li><?= $_GET["harga"];?></li>
</ul>

<a href="latihan1.php">Kembali ke daftar mahasiswa</a>
</body>
</html>