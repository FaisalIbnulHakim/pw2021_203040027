<?php
/*
Faisal Ibnul Hakim
203040027
https://github.com/FaisalHakim081/pw2021_203040027
Pertemuan 10 - 29 April 2021
Koneksi DB & Insert Data
*/
// koneksi ke DB & Pilih Database
$conn = mysqli_connect("localhost", "root", "", "pw_203040027");

// Query isi tabel figure
$result = mysqli_query($conn, "SELECT * FROM figure");

// ubah data ke dalam array
// $row = mysqli_fetch_row($result) // array numerik
// $row = mysqli_fetch_assoc($result) // array associative
// $row = mysqli_fetch_array($result) // keduanya
$rows = [];
while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
}
$figure = $rows;
?>
<!DOCTYPE html>
<html>

<head>
    <title>Document</title>
</head>

<body>

    <h1>Action Figure</h1>

    <table border="1" cellpadding="10" cellspacing="0">

        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>Gambar</th>
            <th>Nama</th>
            <th>Anime</th>
            <th>Produksi</th>
            <th>Harga</th>
        </tr>

        <?php $i = 1; ?>
        <?php foreach ($figure as $f) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td>
                    <a href="">ubah</a>
                    <a href="">hapus</a>
                </td>
                <td><img src="img/<?= $f["gambar"]; ?>"></td>
                <td><?= $f["nama"]; ?></td>
                <td><?= $f["anime"]; ?></td>
                <td><?= $f["produksi"]; ?></td>
                <td><?= $f["harga"]; ?></td>
            </tr>
            <?php $i++; ?>
        <?php endforeach; ?>

    </table>


</body>

</html>