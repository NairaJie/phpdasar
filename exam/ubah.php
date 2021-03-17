<?php
require 'functions.php';

$db = mysqli_connect("localhost", "root", "", "db_phpdasar");

$id = $_GET["id"];
$siswa = get("SELECT * FROM tb_ujian WHERE id = $id")[0];

//var_dump($siswa);

//cek apakah tombol submit ufh di klik atau belum
if(isset($_POST["submit"])){
   
   if(ubah($_POST) > 0){
       //kalo berhasil
        echo "
        <script>
        alert('data berhasil diubah!');
        document.location.href = 'index_ujian.php';
        </script>
        ";

    }else{
        //kalo gagal
        echo "
        <script>
        alert('data gagal diubah!');
        </script>
        ";
    }
    echo mysqli_error($db);

   

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
    <h1> Ubah data Siswa </h1>

    <form action="" method="post">

    <input type="hidden" name="id" value="<?= $siswa["id"];?>"></input>


    <label for= "Gambar"> Gambar : </label>
    <input type="text" name="Gambar" id="Gambar" required
    value="<?=$siswa["Gambar"];?>"></input>
    

    <p>
    <label for= "Nama"> Nama : </label>
    <input type="text" name="Nama" id="Nama" required
    value="<?= $siswa["Nama"];?>"></input>
    
    <p>
    <label for= "Hobby"> Hobby : </label>
    <input type="text" name="Hobby" id="Hobby" required
    value="<?=$siswa["Hobby"];?>"></input>
    

    <p>
    <label for= "Umur"> Umur : </label>
    <input type="text" name="Umur" id="Umur" required
    value="<?=$siswa["Umur"];?>"></input>
    
    <p>
    <button type="submit" name="submit"> submit </button>

  
    
    
    

    </form>
    

</body>
</html>