<?php
//array biasa
$mahasiswa = ["nairaa", "DKV", "nairaxaviera@gmail.com"];

//manggilnya 

echo $mahasiswa[0];

//array di dalam array
$mahasiswi = [
    ["nairaa", "DKV", "nairaxaviera@gmail.com"],
    ["dindaa", "kedokteran", "dindajeno@gmail.com"],
    ["napek", "psikologi", "napekks@gmail.com"],
];
//manggilnya

echo $mahasiswi[2][]
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menampilkan list</title>
</head>
<body>
    <h1>Mahasiswa</h1>
    <ul>
      <li><?php echo $mahasiswa[0] ?></li>
      <li><?php echo $mahasiswa[1] ?></li>
      <li><?php echo $mahasiswa[2] ?></li>
    </ul>

    <ul>
       <?php foreach($mahasiswa as $m):?>
       <li> <?= $m?></li>
       <?php endforeach; ?>
    </ul>

    <!-- mencetak arrat di dalam array menggunakan foreach -->
    <ul>
    <?php foreach($mahasiswi as $mhs): echo"<br>"; ?>
       <?php foreach($mhs as $m): ?>
          <li> <?= $m; ?> </li>
       <?php endforeach; ?>   
    <?php endforeach; ?>  
</body>
</html>