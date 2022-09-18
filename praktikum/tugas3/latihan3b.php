<?php 
/*
Nama            : Faisal Ibnul Hakim
NRP             : 203040027
Shift Praktikum : Rabu 09:00 - 10:00 WIB
*/
?>

<?php 
	$pemain = [
	    "Mohammad Salah",
	    "Cristiano Ronaldo",
	    "Lionel Messi",
	    "Zlatan Ibrahimovic",
	    "Neymar Jr"
	];
	?>
	<!DOCTYPE html>
	<html lang="en">
	<head>
	    <title>Latihan3 B</title>
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
        ol{
            padding:5px 80px
        }
        li{
            margin:5px;
        }
        </style>
	</head>
	<body>
    <div class="kotak">
	    <h4>Daftar pemain bola terkenal</h4>
	    <ol>
	        <?php foreach($pemain as $pmn) : ?>
	            <li><?= $pmn ?></li>
	        <?php endforeach; ?>
	    </ol>
	

	    <?php
	    array_push($pemain,"Luca Modric","Sadio Mane");
	    sort($pemain);
	    ?>
	

	    <h4>Daftar pemain bola terkenal baru</h4>
	    <ol>
	        <?php foreach($pemain as $pmn) : ?>
	            <li><?= $pmn ?></li>
	        <?php endforeach; ?>
	    </ol>
    </div>
	</body>
	</html>