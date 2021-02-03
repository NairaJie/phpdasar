<?php

/* 
VARIABLE SUPER GLOBAL (variable dri php)
$_GET
$_POST
$_COOKIE
$_SESSION
$_ENV
$_SERVER
$GLOBALS
*/

//GET ($_GET)
// ngirim data lewat url
// data tidak rahasia

//POST ($_POST)
//ngirim data lewat post
// login

// echo $_GET ["nama"]="nailah";
//echo "<br>";
//var_dump($_GET);

$mahasiswa =[
    ["nama" => "naira",
    "jurusan" => "RPL",
    "domisili" => "batam"],

    ["nama"=> "ivy",
    "jurusan" => "RPL",
    "domisili" => "batam"],

    ["nama"=> "achii",
    "jurusan"=> "RPL",
    "domisili"=> "batam"],
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Daftar Mahasiswa</h2>
    <?php foreach($mahasiswa as $mhs):?>
    <li>

       <a href = "latihandua.php?
       nama=<?=$mhs["nama"];?>
       &jurusan=<?= $mhs["jurusan"];?>
       &domisili=<?= $mhs["domisili"];?>">
       
       <?= $mhs["nama"];?>
       </a>

    </li>
    <?php endforeach; ?>
</body>
</html>