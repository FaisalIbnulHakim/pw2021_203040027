<?php 
/*
Nama            : Faisal Ibnul Hakim
NRP             : 203040027
Shift Praktikum : Rabu 09:00 - 10:00 WIB
*/
?>
<?php
    function tumpukanBola($tumpukan) {
        for ($x = 1; $x <= $tumpukan; $x++) {
            for ($j = 1; $j <= $x; $j++) {
              echo "<div class='bola'>$x </div>";
            }
            
          echo "<br>";
        } 
    }
?>
    
<!DOCTYPE html>
<html lang="en">
<head>
    <title>latihan 2C</title>
    <style>
        .bola {
            background-color: salmon;
            height: 50px;
            width: 50px;
            line-height: 50px;
            text-align: center;
            margin-bottom: 15px;
            border-radius: 50px;
            display: inline-block;
            border: 2px solid black;
            font-weight: bold;
            font-size:20px;
        }
    </style>
</head>
<body>

<?php tumpukanBola(5) ?>

</body>
</html>