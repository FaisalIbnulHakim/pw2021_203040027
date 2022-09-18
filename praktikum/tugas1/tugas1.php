<?php 
/*
Nama            : Faisal Ibnul Hakim
NRP             : 203040027
Shift Praktikum : Rabu 09:00 - 10:00 WIB
*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Latihan 3</title>
    <style>
        .warna-1 {
            background-color : lightblue;
        }
        .warna-2 {
            background-color : salmon;
        }
    </style>
</head>
<body>
    
    <table border="7" cellpadding="30" cellspacing="5">
            <?php for( $i = 1; $i <= 6; $i++ ) : ?>
                <?php if( $i % 2 == 1 ) : ?>
                    <tr class="warna-1"> 
                <?php elseif ( $i % 2 == 0 ) : ?>
                    <tr class="warna-2">
                <?php endif; ?>
                    <?php for ( $j = 1; $j <= 3; $j++ ) : ?>
                        <td></td>
                    <?php if( $i % 2 == 0) : ?>
                        <td class="warna-1">
                    <?php elseif ( $i % 2 == 1) : ?>
                        <td class="warna-2">
                    <?php endif; ?> 
            <?php endfor; ?>
                </tr>
            <?php endfor; ?>       
        </table>

</body>
</html> 