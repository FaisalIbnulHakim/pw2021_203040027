<?php
/*
Faisal Ibnul Hakim
203040027
https://github.com/FaisalHakim081/pw2021_203040027
Pertemuan 6 - 4 Maret 2021
Associative Array
*/
?>


<?php
// $mahasiswa = [
//     ["Faisal","203040027","Teknik Informatika","faisalhakim081@gmail.com"],
//     ["Ibnul","192040028","Teknik Komunikasi","fiuls@yahoo.id"],
//     ["Hakim","185003200","Teknik Komputer","kamhakim2@gmail.com"],
// ];

// Array Associative
// definisinya sama seperti array numerik, kecuali
// key-nya adalah string yang kita buat sendiri

$mahasiswa = [
        [
            "nama" => "Faisal",
            "nrp"  => "203040027",
            "email" => "faisalhakim081@gmail.com",
            "jurusan" => "Teknik Informatika",
            "gambar" => "aku.jpg"
        ],
        [
            "nama" => "Ibnul",
            "nrp"  => "192040028",
            "email" => "fiuls@yahoo.id",
            "jurusan" => "Teknik Komunikasi",
            "gambar" => "saya.jpg"
        ],
        [
            "nama" => "Hakim",
            "nrp"  => "185003200",
            "email" => "kamhakim2@gmail.com",
            "jurusan" => "Teknik Komputer",
            "gambar" => "urg.jpg"
        ]
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
    <li>
        <img src="img/<?= $mhs["gambar"]; ?>">
    </li>
    <li>Nama    : <?= $mhs["nama"]; ?></li>
    <li>Nrp     : <?= $mhs["nrp"]; ?></li>
    <li>Jurusan : <?= $mhs["jurusan"]; ?></li>
    <li>Email   : <?= $mhs["email"]; ?></li>

</ul>
<?php endforeach; ?>
</body>
</html>