<?php
require 'functions.php';

//cek apakah tombol submit ufh di klik atau belum
if(isset($_POST["submit"])){
   
    if(tambah($_POST) > 0){
        //kalo berhasil
        echo "
        <script>
        alert('data berhasil ditambahkan!');
        document.location.href = 'index.php';
        </script>
        ";

    }else{
        //kalo gagal
        echo "
        <script>
        alert('data gagal ditambahkan!');
        document.location.href = 'index.php';
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
    <h1> Tambah data Siswa </h1>

    <form action="" method="post">

    <p>
    <label for= "gambar_siswa"> Gambar : </label>
    <input type="text" name="gambar_siswa" id="gambar siswa" required></input>
    

    <p>
    <label for= "nama_siswa"> Nama : </label>
    <input type="text" name="nama_siswa" id="gambar siswa" required></input>
    
    <p>
    <label for= "kelas_siswa"> Kelas : </label>
    <input type="text" name="kelas_siswa" id="gambar siswa" required></input>
    

    <p>
    <label for= "email_siswa"> email : </label>
    <input type="text" name="email_siswa" id="gambar siswa" required></input>
    
    <p>
    <button type="submit" name="submit"> submit </button>
    

    </form>


</body>
</html>