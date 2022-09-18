<?php
if (!isset($_GET['id'])) {
    header("location: shop.php");
    exit;
}

require 'functions.php';

$id = $_GET['id'];
$gr = query("SELECT * FROM gaminggear WHERE id = $id");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss/dist/tailwind.min.css" />
    <title>Detail <?= $gr["nama"]; ?></title>
</head>

<body class="bg-blue-200">
    <div class="h-auto">
        <div id="main" class="mx-auto lg:my-28 my-10 bg-white lg:flex justify-start w-max">
            <div class="lg:max-w-lg max-w-sm p-4 bg-gray-100 shadow-2xl z-10 lg:border-white border-b-2 border-blue-500 border-opacity-50">
                <p class="flex justify-end"><a href="shop.php" class="max-w-max p-1 -mt-4 -mr-4 bg-blue-700">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                        </svg></a></p>
                <p class="transform -rotate-90 mt-4 w-max font-semibold lg:-ml-4 tracking-widest uppercase"><?= $gr["tipe"]; ?></p>
                <p class="transform lg:hover:scale-125 transition-all duration-500 lg:w-4/5 mx-auto mt-8"><img src="../assets/img/<?= $gr["gambar"]; ?>" alt=""></p>
            </div>
            <div class="lg:max-w-lg max-w-sm p-8 bg-white">
                <p class="uppercase font-bold tracking-wider mt-6 text-2xl"><?= $gr["nama"]; ?></p>
                <p class="font-semibold mt-2 text-xl"><?= $gr["harga"]; ?></p>
                <p class="mt-3 text-sm"><?= $gr["deskripsi"]; ?></p>
                <div class="mt-10 flex justify-start ">
                    <div class="transition ease-out duration-500 rounded-md p-2 bg-transparant border-2 border-blue-500 hover:border-tranparant hover:bg-blue-500 font-semibold w-32 hover:text-white cursor-pointer">
                        <p class="mx-auto w-max "><a href="">ADD TO CART</a></p>
                    </div>
                    <div class="transition ease-out duration-500 rounded-md p-2 bg-transparant border-2 border-blue-500 hover:border-tranparant hover:bg-blue-500 font-semibold w-32 ml-8 hover:text-white cursor-pointer">
                        <p class="mx-auto w-max"><a href="">PURCHASE</a></p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</body>

</html>