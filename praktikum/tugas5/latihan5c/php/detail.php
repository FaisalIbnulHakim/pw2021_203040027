<?php
if (!isset($_GET['id'])) {
    header("location: ../index.php");
    exit;
}

require 'functions.php';

$id = $_GET['id'];
$gr = query("SELECT * FROM gaminggear WHERE id = $id")[0];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/detail.css">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="gambar">
            <img src="../assets/img/<?= $gr["gambar"]; ?>">
        </div>

        <div class="list2"></div>

        <div class="list">
            <h1><?= $gr["nama"]; ?></h1>
            <ul>
                <li><?= $gr["deskripsi"]; ?></li>
            </ul>
            <br>
            <br>
            <h3><?= $gr["harga"]; ?></h3>
        </div>
        <button id="back"><a href="../index.php"><span>BACK</span></a></button>
    </div>
</body>

</html>