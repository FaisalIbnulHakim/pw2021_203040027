<?php
/*
Faisal Ibnul Hakim
203040027
https://github.com/FaisalHakim081/pw2021_203040027
pertemuan 3 - 8 Februari 2021
mempelajari struktur kendali PHP  
Pengulangan dan Pengkodisian
*/
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Latihan 1</title>
</head>
<body>
    
    <table border="1" cellpadding="10" cellspacing="0">
        <?php for ($i =1 ; $i <= 3 ; $i++) : ?>
            <tr>
                <?php for ($j =1 ; $j <= 5 ; $j++) : ?>
                    <td> <?php echo "$i,$j" ?></td>
                <?php endfor; ?>
            </tr>
        <?php endfor; ?>
    </table>

</body>
</html> 