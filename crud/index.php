<?php
require 'functions.php';
//ambil data dari table 
$siswa = get("SELECT * FROM tb_siswa");

 var_dump(mysqli_affected_rows($db));
    echo mysqli_error($db)








?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Daftar Siswa</h1>
    <a href = "tambah.php">tambah data siswa</a>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No</th>
            <th>aksi</th>
            <th>Gambar</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Email</th>
        </tr>
        
    <?php $i = 1;?>
    <?php foreach ($siswa as $row):?>
        <tr>
            <td><?=$i; ?></td>

            <td>
            <a href = "">ubah</a>
            <a href = "">hapus</a>
            </td>

            
            <td><img src="img/<?=$row["gambar_siswa"] ?>" width="50"></td>
            <td><?= $row["nama_siswa"]?></td>
            <td><?= $row["kelas_siswa"]?></td>
            <td><?= $row["email_siswa"]?></td>
        </tr>
        <?php $i++ ?>

    <?php endforeach; ?>
    
    </table>
</body>
</html