<?php 

$member = ["Jisung", "Sungchan", "Haechan", "Mark", "doyoung"];

$profile = [
    ["nama" => "Jizatra",
    "line" => "2002",
    "unit" => "dream"],

    ["nama" => "Sagara",
    "line" => "2001",
    "unit" => "NCT2020"],

    ["nama" => "Alkala",
    "line" => "2000",
    "unit" => "dream"],

    ["nama" => "Mahendra",
    "line" => "1999",
    "unit" => "NCT127"],

    ["nama" => "Doy",
    "line" => "1996",
    "unit" => "NCT127"],

];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Array</title>
    </style>
</head>
<body>
    <h1> NEO </h1>
    <h2> Member <h2>
       <ul>
          <li><?= $member[0] ?></li>
          <li><?= $member[1] ?></li>
          <li><?= $member[2] ?></li>
          <li><?= $member[3] ?></li>
          <li><?= $member[4] ?></li>
        </ul>

    <h2> Profile <h2>
    <?php foreach($profile as $p):?>
       <ul> 
         <li>Nama : <?= $p["nama"]; ?></li>
         <li>Line : <?= $p["line"]; ?></li>
         <li>Unit : <?= $p["unit"]; ?></li>
       </ul>
    <?php endforeach;?>

</body>
</html>