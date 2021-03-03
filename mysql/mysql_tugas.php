<?php
$db = mysqli_connect("localhost","root","","db_phpdasar");
$result = mysqli_query($db, "SELECT * FROM tb_tugas"); 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>BOEJANG</h1>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Gambar</th>
            <th>Line</th>
            <th>Posisi</th>
        </tr>
        
    <?php $i = 1;?>
    <?php while ($row = mysqli_fetch_assoc($result)):?>
        <tr>
            <td><?= $row ["id_member"]?></td>
            <td><?= $row["nama_member"]?></td>
            <td><img src="img2/<?=$row["foto_member"] ?>" width="50"></td>
            <td><?= $row["line_member"]?></td>
            <td><?= $row["posisi_member"]?></td>
        </tr>
        <?php $i++ ?>

    <?php endwhile; ?>
    
    </table>
</body>
</html>