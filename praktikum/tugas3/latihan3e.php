<?php 
/*
Nama            : Faisal Ibnul Hakim
NRP             : 203040027
Shift Praktikum : Rabu 09:00 - 10:00 WIB
*/
?>

<?php
$gear = [
        [
            "nama" => "Corsair Hs70 Pro",
            "deskripsi"  => "Frequency Response: 20 Hz – 20 kHz | Headphone Sensitivity: 111dB (+/-3dB) | Headphone Type: Wireless 
                             | Microphone Frequency Response: 100Hz to 10kHz | Microphone Sensitivity: -40dB (+/-3dB)",
            "harga" => "Rp 1,400,000",
            "gambar" => "Hd1.jpg",
            "type" => "Headset"
        ],
        [
            "nama" => "Razer Nari Ultimate",
            "deskripsi"  => "Frequency Response: 20 Hz – 20 kHz | Headphone Sensitivity: 107dB (+/-3dB) | Headphone Type: Wireless USB Transceiver / 3.5mm Analog
                             | Microphone Frequency Response: 100Hz to 6.5kHz | Microphone Sensitivity: -42dB (+/-3dB)",
            "harga" => "Rp 3,299,000",
            "gambar" => "Hd2.jpg",
            "type" => "Headset"
        ],
        [
            "nama" => "Sennheiser Gsp 350",
            "deskripsi"  => "Frequency Response: 15 Hz - 26 KHz | Headphone Sensitivity: 113dB | Headphone Type: USB 
                             | Microphone Frequency Response: 10Hz to 15kHz | Microphone Sensitivity: -41dB ",
            "harga" => "Rp 1,790,000",
            "gambar" => "Hd3.jpg",
            "type" => "Headset"
        ],
        [
            "nama" => "Steelseries Arctis 7",
            "deskripsi"  => "Frequency Response: 20 Hz – 22 kHz | Headphone Sensitivity: 98dB | Headphone Type: Wireless USB and Wired analog options Single 3.5mm 
                             | Microphone Frequency Response: 100Hz to 6.5kHz | Microphone Sensitivity: -48dB",
            "harga" => "Rp 2,285,000",
            "gambar" => "Hd4.jpg",
            "type" => "Headset"
        ],
        [
            "nama" => "Corsair K68 RGB",
            "deskripsi"  => "Height: 455 mm | Width: 170 mm | Depth: 39 mm | Weight: 1.12 kg | Cable: NA | Connection Type: USB 2.0 Type-A
                             | USB Protocol: USB 2.0 | Backlighting: RGB",
            "harga" => "Rp 1,299,000",
            "gambar" => "Ky1.jpg",
            "type" => "Keyboard"
        ],
        [
            "nama" => "Logitech G Pro X Keyboard",
            "deskripsi"  => "Height: 34 mm | Width: 361 mm | Depth: 153 mm | Weight: 0,98 kg | Cable: 1.8 m | Connection Type: USB 2.0 
                             | USB Protocol: USB 2.0 | Backlighting: RGB ",
            "harga" => "Rp 1,549,000",
            "gambar" => "Ky2.jpg",
            "type" => "Keyboard"
        ],
        [
            "nama" => "Logitech G213 Prodigy",
            "deskripsi"  => "Height: 218 mm | Width: 452 mm | Depth: 33 mm | Weight: 1 kg | Cable: 1.8 m | Connection Type: USB 2.0  
                             | USB Protocol: USB 2.0 | Backlighting: RGB (5 Zona)s",
            "harga" => "Rp 619,000",
            "gambar" => "Ky3.jpg",
            "type" => "Keyboard"
        ],
        [
            "nama" => "Steelseries Apex Pro TKL",
            "deskripsi"  => "Height: 40.44 mm | Width: 139.26 mm | Depth: 355.44 mm | Weight: 1 kg | Cable: 2,1 m | Connection Type:  USB Passthrough Port
                             | USB Protocol: USB 2.0 | Backlighting: RGB ",
            "harga" => "Rp 2,920,000",
            "gambar" => "Ky4.jpg",
            "type" => "Keyboard"
        ],
        [
            "nama" => "Razer Taipan",
            "deskripsi"  => "Length: 124 mm | Width: 63 mm | Height: 36 mm | Weight: 95 g | Cable-Length: NA | DPI: 8,200 | Mouse Backlighting: NA",
            "harga" => "Rp 800,000",
            "gambar" => "Ms1.jpg",
            "type" => "Mouse"
        ],
        [
            "nama" => "Corsair Iron Claw RGB",
            "deskripsi"  => "Length: 130 mm | Width: 80 mm | Height: 45 mm | Weight: 105 g | Cable-Length: 1,8 m | DPI: 18,000 | Mouse Backlighting: 1 RGB Zones",
            "harga" => "Rp 799,000",
            "gambar" => "Ms2.jpg",
            "type" => "Mouse"
        ],
        [
            "nama" => "Corsair Nightsword RGB",
            "deskripsi"  => "Length: 129 mm | Width: 86 mm | Height: 43.8 mm | Weight: 119 g | Cable-Length: 1,8 m | DPI: 18,000 | Mouse Backlighting: 4 RGB Zones",
            "harga" => "Rp 1,269,000",
            "gambar" => "Ms3.jpg",
            "type" => "Mouse"
        ],
        [
            "nama" => "Steelseries Rival 600",
            "deskripsi"  => "Length: 131 mm | Width: 62 mm | Height: 27 mm | Weight: 128 g | Cable-Length: 2 m | DPI: 12,000 | Mouse Backlighting: 8 RGB Zones",
            "harga" => "Rp 1,250,000",
            "gambar" => "Ms4.jpg",
            "type" => "Mouse"
        ]
        
]; 


?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Document</title>
    <style>
    img{
        width:300px;
        height:220px;
    }
    h1{
        text-align:center;
        color:teal;
        font-size:70px;
        padding:10px;
        text-shadow: 0 1px 0 #ccc,
               0 2px 0 #c9c9c9,
               0 3px 0 #bbb,
               0 4px 0 #b9b9b9,
               0 5px 0 #aaa,
               0 6px 1px rgba(0,0,0,.1),
               0 0 5px rgba(0,0,0,.1),
               0 1px 3px rgba(0,0,0,.3),
               0 3px 5px rgba(0,0,0,.2),
               0 5px 10px rgba(0,0,0,.25),
               0 10px 10px rgba(0,0,0,.2),
               0 20px 20px rgba(0,0,0,.15);
    }
    th{
        text-align:center;
    }
    #type{
        text-align:center;
    }
    span{
       color:#07bff2;
       background-color:#116951;
       text-align:center;
       font-weight:bold;
       padding:5px;
       border:1px solid #116951;
       border-radius:30px;
       cursor:default;
    }
    span:hover{
       color:#ffa50a;
       background-color:#d90d3d; 
       border:1px solid #d90d3d;
    }
    </style>
</head>
<body>
    
<h1>GAMING GEAR</h1>
<div class="table-responsive">
    <table class="table">
        <tr class="table-primary">
            <th>No</th>
            <th>Gambar</th>
            <th>Nama</th>
            <th>Fitur</th>
            <th>Harga</th>
            <th>Type</th>
        </tr>
        <?php $i = 1 ?>
        <?php foreach ($gear as $gr) : ?>
            <tr>
                <td class="table-success"><?= $i; ?></td>
                <td><img src="img/<?= $gr["gambar"]; ?>"></td>
                <td class="table-success"><?= $gr["nama"]; ?></td>
                <td><?= $gr["deskripsi"]; ?></td>
                <td class="table-success"><?= $gr["harga"]; ?></td>
                <td id="type"><span><?= $gr["type"]; ?></span></td>
            </tr>
        <?php $i++; ?>
        <?php endforeach; ?>

    </table>
</div>


</body>
</html>
