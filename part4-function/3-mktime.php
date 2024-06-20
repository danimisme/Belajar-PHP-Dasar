<?php 
//mktime
//membuat detik sendiri
//mktime(jam,menit,detik,bulan,tanggal,tahun)

//encari hari pada tanggal 24 desember 1998
echo date("l", mktime(0,0,0,12,24,1998));

//strtotime
echo strtotime("24 dec 1998");

?>