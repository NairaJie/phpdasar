<?php
require 'functions.php';

$db = mysqli_connect("localhost", "root", "", "db_phpdasar");
echo mysqli_error($db);

$id = $_GET["id"];
$siswa = get("SELECT * FROM tb_siswa WHERE id_siswa = $id")[0];

//var_dump($siswa);

//cek apakah tombol submit ufh di klik atau belum
if(isset($_POST["submit"])){
   
   if(ubah($_POST) > 0){
       //kalo berhasil
        echo "
        <script>
        alert('data berhasil diubah!');
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

    <input type="hidden" name="id_siswa" value="<?= $siswa["id_siswa"];?>"></input>


    <label for= "gambar_siswa"> Gambar : </label>
    <input type="text" name="gambar_siswa" id="gambar siswa" required
    value="<?=$siswa["gambar_siswa"];?>"></input>
    

    <p>
    <label for= "nama_siswa"> Nama : </label>
    <input type="text" name="nama_siswa" id="nama siswa" required
    value="<?= $siswa["nama_siswa"];?>"></input>
    
    <p>
    <label for= "kelas_siswa"> Kelas : </label>
    <input type="text" name="kelas_siswa" id="kelas siswa" required
    value="<?=$siswa["kelas_siswa"];?>"></input>
    

    <p>
    <label for= "email_siswa"> email : </label>
    <input type="text" name="email_siswa" id="email siswa" required
    value="<?=$siswa["email_siswa"];?>"></input>
    
    <p>
    <button type="submit" name="submit"> submit </button>

  
    
    
    

    </form>
    

</body>
</html>