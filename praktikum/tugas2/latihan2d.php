<?php 
/*
Nama            : Faisal Ibnul Hakim
NRP             : 203040027
Shift Praktikum : Rabu 09:00 - 10:00 WIB
*/
?>


<?php
    function hitungDeterminant($a, $b, $c, $d){
        $hasil = (($a * $d) - ($b * $c));
        echo "<table style='border-left: 2px solid black; border-right:2px solid black;' cellspacing='5' cellpadding='5'>
            <tr>
                <td> $a </td>
                <td> $b </td>
            </tr>
            <tr>
                <td> $c </td>
                <td> $d </td>
            </tr>
        </table>";
        
        echo "Determinan dari matriks tersebut adalah $hasil";
    }
?>
    
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Latihan 2D</title>
</head>
<body>

<?php hitungDeterminant(1,2,3,4) ?>

</body>
</html>