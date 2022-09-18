<?php
/*
Faisal Ibnul Hakim
203040027
https://github.com/FaisalHakim081/pw2021_203040027
pertemuan 5 - 3 Maret 2021
mempelajari mengenai sintaks PHP 
Array
*/
?>
<?php
$mahasiswa = [
    ["Faisal","203040027","Teknik Informatika","faisalhakim081@gmail.com"],
    ["Ibnul","192040028","Teknik Komunikasi","fiuls@yahoo.id"],
    ["Hakim","185003200","Teknik Komputer","kamhakim2@gmail.com"],
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Daftar Mahasiswa</title>
</head>
<body>
<h1>Daftar Mahasiswa</h1>


<?php foreach ($mahasiswa as $mhs) : ?>
<ul>
    <li>Nama    : <?= $mhs[0]; ?></li>
    <li>Nrp     : <?= $mhs[1]; ?></li>
    <li>Jurusan : <?= $mhs[2]; ?></li>
    <li>Email   : <?= $mhs[3]; ?></li>
</ul>
<?php endforeach; ?>
</body>
</html>