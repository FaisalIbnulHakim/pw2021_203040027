<?php
/*
Nama            : Faisal Ibnul Hakim
NRP             : 203040027
Shift Praktikum : Rabu 09:00 - 10:00 WIB
*/
?>

<?php
$conn = mysqli_connect("localhost", "root", "");
mysqli_select_db($conn, "pw_tubes_203040027");
$result = mysqli_query($conn, "SELECT * FROM gaminggear");
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>

    <h1 style="font-size:70px">GAMING GEAR</h1>
    <div class="table-responsive">
        <table class="table">
            <tr class="table-primary" style="text-align:center">
                <th>No</th>
                <th>Gambar</th>
                <th>Nama</th>
                <th>Fitur</th>
                <th>Harga</th>
                <th>Type</th>
            </tr>
            <?php $i = 1 ?>
            <?php while ($gr = mysqli_fetch_assoc($result)) : ?>
                <tr>
                    <td class="table-success"><?= $i; ?></td>
                    <td><img src="assets/img/<?= $gr["gambar"]; ?>"></td>
                    <td class="table-success"><?= $gr["nama"]; ?></td>
                    <td><?= $gr["deskripsi"]; ?></td>
                    <td class="table-success"><?= $gr["harga"]; ?></td>
                    <td id="type"><span><?= $gr["tipe"]; ?></span></td>
                </tr>
                <?php $i++; ?>
            <?php endwhile; ?>

        </table>
    </div>


</body>

</html>