<?php 
/*
Nama            : Faisal Ibnul Hakim
NRP             : 203040027
Shift Praktikum : Rabu 09:00 - 10:00 WIB
*/
?>

<?php 
	$pesepakbola = [
	    "Cristiano Ronaldo" => "Juventus",
        "Lionel Messi" => "Barcelona",
        "Luca Modric" => "Ral Madrid",
        "Mohammad Salah" => "Liverpool",
        "Neymar Jr" => "Paris Saint Germain",
        "Sadio Mane" => "Liverpool",
        "Zlatan Ibrahimovic" => "AC Milan"
    ];
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Latihan3 C</title>
    <style>
    .kotak {
        font-size: 20px;
        border: 2px solid black;
        padding: 18px 10px;
        width: 50%;
        font-family: arial;
    }
    h4{
        margin-top:-5px;
    }
    </style>
</head>
<body>

    <div class="kotak">
        <h4>Daftar pemain bola terkenal Dan Clubnya</h4>
        <table>
            <?php foreach($pesepakbola as $pebola=> $club) : ?>
                <td><b><?= $pebola; ?></b></td>
                <td>:</td>
                <td><?= $club; ?></td>
                <tr></tr>
            <?php endforeach; ?>
        </table>
    </div>
</body>
</html>