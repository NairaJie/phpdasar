<?php
//array assosiative = keynya kita buat string sendiri

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

echo $mahasiswa[2]["nama"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1> Daftar Mahasiswa </h1>
    <?php foreach($mahasiswa as $m):?>
       <ul> 
         <li>Nama : <?= $m["nama"]; ?></li>
         <li>Jurusan : <?= $m["jurusan"]; ?></li>
         <li>Domisili : <?= $m["domisili"]; ?></li>
       </ul>
    <?php endforeach;?>
</body>
</html>