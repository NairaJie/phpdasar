<?php
require 'funcitions_tugas.php';

//cek apakah tombol submit ufh di klik atau belum
if(isset($_POST["submit"])){
   
    if(tambah($_POST) > 0){
        //kalo berhasil
        echo "
        <script>
        alert('data berhasil ditambahkan!');
        document.location.href = 'mysql_tugas.php';
        </script>
        ";

    }else{
        //kalo gagal
        echo "
        <script>
        alert('data gagal ditambahkan!');
        document.location.href = 'mysqli_tugas.php';
        </script>
        ";
    }


}


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
    <h1> Tambah data  </h1>

    <form action="" method="post">

    <p>
    <label for= "nama_member"> Nama : </label>
    <input type="text" name="nama_member" id="nama_member" required></input>
    

    <p>
    <label for= "foto_member"> Foto : </label>
    <input type="text" name="foto_member" id="foto_member" required></input>
    
    <p>
    <label for= "line_member"> Line : </label>
    <input type="text" name="line_member" id="line_member" required></input>
    

    <p>
    <label for= "posisi_member"> Posisi : </label>
    <input type="text" name="posisi_member" id="posisi_member" required></input>
    
    <p>
    <button type="submit" name="submit"> submit </button>
    

    </form>


</body>
</html>