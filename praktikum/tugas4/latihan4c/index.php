<?php
/*
Nama            : Faisal Ibnul Hakim
NRP             : 203040027
Shift Praktikum : Rabu 09:00 - 10:00 WIB
*/
?>

<?php
require 'php/functions.php';
$gear = query("SELECT * FROM gaminggear");
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
    <div class="container">
        <h1>GAMING GEAR NAME</h1>
        <?php foreach ($gear as $gr) : ?>
            <p class="nama">
            <table class="table">
                <tr>
                    <td class="table-success"><a style="text-decoration:none" href="php/detail.php?id=<?= $gr['id'] ?>"><span><?= $gr["nama"]; ?></span></a></td>
                </tr>
            </table>

            </p>
        <?php endforeach; ?>
    </div>
    </table>
    </div>

</body>

</html>