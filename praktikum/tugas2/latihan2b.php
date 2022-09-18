<?php 
/*
Nama            : Faisal Ibnul Hakim
NRP             : 203040027
Shift Praktikum : Rabu 09:00 - 10:00 WIB
*/
?>
<?php
    $jawabanIsset = "Isset adalah = salah satu fungsi php, guna untuk memeriksa suatu objek dari nilai inputan form, isset() tersebut akan berperan mencek nilai tersebut dan jika nilai yang dilempar dari suatu form tersebut ada maka akan bernilai true walaupun nilai dari suatu form tersebut tidak terisi atau kosong<br><br>";
    $jawabanEmpty = "Empty adalah = salah satu fungsi php, untuk menentukan apakah suatu variabel itu kosong/tidak terdefinisi atau belum. Akan menghasilkan false jika variabel terdefinisi dan true ketika variabel kosong atau tidak terdefinisi. Fungsi ini sangat bermanfaat untuk mengecek dan mencegah inputan kosong"; 
    
    function soal($style){
        echo $GLOBALS['jawabanIsset'];
        echo $GLOBALS['jawabanEmpty'];
    }
    
    
    echo soal( 
        "font-family: Arial; font-size:28px; color:#8c782d; font-style:italic; font-weight: bold;"
    );

?>