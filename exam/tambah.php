<?php
require 'functions.php';

//cek apakah tombol submit ufh di klik atau belum
if(isset($_POST["submit"])){
   
    if(tambah($_POST) > 0){
        //kalo berhasil
        echo "
        <script>
        alert('data berhasil ditambahkan!');
        document.location.href = 'index_ujian.php';
        </script>
        ";

    }else{
        //kalo gagal
        echo "
        <script>
        alert('data gagal ditambahkan!');
        document.location.href = 'index_ujian.php';
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
    <label for= "Nama"> Nama : </label>
    <input type="text" name="Nama" id="Nama"></input>

    <p>
    <label for= "Gambar"> Gambar : </label>
    <input type="text" name="Gambar" id="Gambar" required></input>

    
    <p>
    <label for= "Hobby"> Hobby : </label>
    <input type="text" name="Hobby" id="Hobby"></input>
    

    <p>
    <label for= "Umur"> Umur : </label>
    <input type="text" name="Umur" id="Umur"></input>
    
    <p>
    <button type="submit" name="submit"> submit </button>
    

    </form>


</body>
</html>