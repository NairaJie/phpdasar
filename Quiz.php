<?php
//Tuliskan code untuk menampilkan angka 1-100 

for($x=1;$x<=100;$x++)
{
echo "Angka $x<br>";
}
echo "<p>";

/*Tuliskan code untuk menampilkan, jika jam waktu shubuh, maka keluar 
text "subuh" jika jam waktu ashar, maka keluar text "ashar", dan 
seterusnya sampai isya */

date_default_timezone_set("asia/jakarta");
$jam = date("h:i");

if ($jam > "04.27" && $jam < "06.00"){
    $waktu = "Shubuh";
} elseif($jam >= "12.03" && $jam < "15.10"){
    $waktu = "Dzuhur";
} elseif($jam >= "15.26" && $jam < "18.00"){
    $waktu = "Ashar";
} elseif($jam >= "18.15" && $jam < "19.25"){
    $waktu = "Maghrib";
} else{
    $waktu = "Isya";
}

echo "Sholat $waktu";
echo "<p>";

/*Zaki telah mengikuti Ujian Matematika di sekolahnya, lalu untuk 
penilaian ujiannya, nilai 90-100 mendapatkan A, nilai 80-90 mendapatkan B, 
lalu nilai 70-80 mendapatkan C. Jika Zaki mendapatkan nilai 85, nilai 
huruf apa yang didapatkannya? buatlah code phpnya!! */

$x = 85;
if($x > "90" && $x <"100"){
    echo "A";
} elseif($x > "80" && $x < "90"){
    echo "B";
} elseif($x > "70" && $x < "80"){
    echo "C";    
} else{
    echo "D";
}


?>