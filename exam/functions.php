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
    $nama = $post["Nama"];
    $gambar = $post["Gambar"];
    $hobby = $post["Hobby"];
    $umur = $post["Umur"];

     //query insert data
     $query = "INSERT INTO tb_ujian VALUES ('', '$nama', '$gambar', '$hobby', '$umur')";
     mysqli_query($db, $query);

     return mysqli_affected_rows($db);
}

function hapus($id){
    global $db;
    mysqli_query($db, "DELETE FROM tb_ujian WHERE id=$id"); 

    return mysqli_affected_rows($db);
}

function ubah($data){
    global $db;
    //ambil data dari tiap elemen dalam form 
    $id = $data["id"];
    $nama = $data["Nama"];
    $gambar = $data["Gambar"];
    $hobby = $data["Hobby"];
    $umur = $data["Umur"];

    $query = "UPDATE tb_ujian SET
    Nama = '$nama',
    Gambar = '$gambar',
    Hobby = '$hobby',
    Umur = '$umur'
    
    WHERE id = $id";

     mysqli_query($db, $query);

     return mysqli_affected_rows($db);


}


?>