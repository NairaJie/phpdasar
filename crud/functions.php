<?php 
//koneksi ke database 
//(host, user, password, nama database)
$db = mysqli_connect("localhost", "root", "", "db_phpdasar");

function get($query){
    global $db;
    $result = mysqli_query($db, $query);
    $rows = [];
    while( $row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}

function tambah($post){
    global $db;
    //ambil dat dari tiap elemen dalam form 
    $nama = $post["nama_siswa"];
    $gambar = $post["gambar_siswa"];
    $email = $post["email_siswa"];
    $kelas = $post["kelas_siswa"];

     //query insert data
     $query = "INSERT INTO tb_siswa VALUES ('', '$gambar', '$nama', '$kelas', '$email')";
     mysqli_query($db, $query);

     return mysqli_affected_rows($db);
}
?>