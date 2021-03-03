<?php
require 'funcitions_tugas.php';
//ambil data dari table 
$member = get("SELECT * FROM tb_tugas");

 var_dump(mysqli_affected_rows($db));
    echo mysqli_error($db)


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
<a href = "tambah_tugas.php">tambah data </a>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No</th>
            <th>aksi</th>
            <th>Nama</th>
            <th>Gambar</th>
            <th>Line</th>
            <th>Posisi</th>
        </tr>
        
    <?php $i = 1;?>
    <?php foreach ($member as $row):?>
        <tr>

            <td><?=$i; ?></td>

            <td>
            <a href = "">ubah</a>
            <a href = "">hapus</a>
            </td>

            <td><?= $row ["id_member"]?></td>
            <td><?= $row["nama_member"]?></td>
            <td><img src="img2/<?=$row["foto_member"] ?>" width="50"></td>
            <td><?= $row["line_member"]?></td>
            <td><?= $row["posisi_member"]?></td>
        </tr>
        <?php $i++ ?>

    <?php endforeach; ?>
    
    </table>
</body>
</html>