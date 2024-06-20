<?php
// array associative 
// keynya adalah string yang kita biat sendiri

$mahasiswa = [[
        "nama" => "Muhammad Subhan",
        "npm" => "201943500087",
        "email" => "msubhanr53@gmail.com",
        "jurusan" => "Teknik Informatika"
    ],
    [
        "nama" => "Sandhika Galih",
        "npm" => "201943500001",
        "email" => "sandhika@gmail.com",
        "jurusan" => "Teknik Informatika"
    ]  

];

echo $mahasiswa[1]["nama"];

?>