<?php
// array associative 
// keynya adalah string yang kita biat sendiri

$mahasiswa = [[
        "nama" => "Muhammad Subhan",
        "npm" => "201943500087",
        "email" => "msubhanr53@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "img/mark.jpg"
    ],
    [
        "nama" => "Sandhika Galih",
        "npm" => "201943500001",
        "email" => "sandhika@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "img/elon.jpg"
    ]  

];

echo $mahasiswa[1]["nama"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Associative</title>
</head>
<body>
    <h1>Data Mahasiswa</h1>
    <?php for($i=0; $i < count($mahasiswa); $i++ ) : ?>
        <p>Data mahasiswa <?= $i+1 ?></p>
        <ul>
        <li>
            <img src= <?= $mahasiswa[$i]["gambar"]  ?> alt="" style="width: 100px;" >
        </li>
        <li> Nama : <?= $mahasiswa[$i]["nama"]; ?></li>
        <li> NPM : <?= $mahasiswa[$i]["npm"]; ?></li>
        <li> Jurusan : <?= $mahasiswa[$i]["jurusan"]; ?></li>
        <li> Email : <?= $mahasiswa[$i]["email"]; ?></li>
        </ul>
    <?php endfor; ?>

</body>
</html>