<?php
//function = sekumpulan intruksi yg dibungku sdalam sebuah blok

function biodata (){
    echo "nailah<br>";
    echo "X Web<br>";
    echo "22, Juli 2005<br>";
}
biodata();
echo "<p>";

//date
//menampilkan tanggal dengan format tertentu
/* 
l = nama hari lengkap = wednesday
D = nama hari singkat = wed
d = tanggal = 19
m = bulan (angka) = 06
M = bulan (teks) = Juni
y = tahun (singkat) = 21
Y = tahun = 2021
*/
date_default_timezone_set("asia/jakarta");
echo date("H:i:s");
echo "<p>";

//time
//detik yg sudah berlalu sejak 1 jan 1970
echo time();
echo "<p>";

echo date("l, d M y", time()+60*60*24*100);
echo "<p>";

echo date("l", strtotime("05 february "));




?>