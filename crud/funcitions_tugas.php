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
    $nama = $post["nama_member"];
    $gambar = $post["foto_member"];
    $line = $post["line_member"];
    $posisi = $post["posisi_member"];

     //query insert data
     $query = "INSERT INTO tb_tugas VALUES ('', '$gambar', '$nama', '$line', '$posisi')";
     mysqli_query($db, $query);

     return mysqli_affected_rows($db);
}
?>