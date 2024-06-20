<?php 
// UNIX Timestamp / EPOCH Time
// Detik yang sudah berlalu sejak 1 januari 1970
echo time();

echo "<br>";

//menampilkan 2 hari yang akan datang
echo date("l", time()+60+60+24+2);
echo "<br>";
echo date("l, d M Y" , time() + 60*60*24*2);
?>