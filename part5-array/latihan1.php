<?php
//Array
//variabel yang dapat memiliki banyak nilai
//elemen pada array boleh memiliki tipe data ynag berbeda

//membuat array
//cara lama
$hari = array("Senin","Selasa","Rabu","Kamis","Jum'at","Sabtu","Minggu");

//cara baru
$bulan = ["Januari","Febuari","Maret","April"];
$arr1 = [123, "tulisan",false];

//menampilkan array
//var_dump()
var_dump($hari);

echo "<br>";
echo "<br>";

//print_r()
print_r($bulan);


echo "<br>";
echo "<br>";

//Menampilkan 1 ekemen pada array
echo $hari[0];
echo "<br>";
echo $bulan[1];

echo "<br>";
echo "<br>";
//Menambahkan elemen baru pada array
$bulan[] = "Mei";
$bulan[] = "Juni";
print_r($bulan);

?>