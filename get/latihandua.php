<?php
//isset = untuk ngecheck variable apakah udh ada apa blm
//di $_GET ada data apa ngga? klo misalnya gada data, paksa pinda ke latihansatu.php
//cek apakah tidak ada data di $_GET ketika tidak ada data maka akan dipaksa pindah ke latihansatu.php
if( !isset($_GET["nama"]) ||
    !isset($_GET["jurusan"]) ||
    !isset($_GET["domisili"]) 
){
    //pindah ke halaman lain
    header("location: latihansatu.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <ul>
        <li>nama : <?=$_GET["nama"];?></li>
        <li>Jurusan : <?=$_GET["jurusan"];?></li>
        <li>Domisili : <?=$_GET["domisili"];?></li>

    </ul>

    <a href ="latihansatu.php">back</a>
</body>
</html>