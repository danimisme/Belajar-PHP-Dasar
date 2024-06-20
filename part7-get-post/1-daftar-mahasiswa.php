<?php

$mahasiswa = [[
    "nama" => "Muhammad Subhan",
    "npm" => "201943500087",
    "email" => "msubhanr53@gmail.com",
    "jurusan" => "Teknik Informatika",
    "gambar" => "../part6-associative-array/img/mark.jpg"
],
[
    "nama" => "Sandhika Galih",
    "npm" => "201943500001",
    "email" => "sandhika@gmail.com",
    "jurusan" => "Teknik Informatika",
    "gambar" => "../part6-associative-array/img/elon.jpg"
]  

];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan get dan post</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <ul>
    <?php foreach($mahasiswa as $mhs) : ?>
        <li>
            <a href="2-detail-mahasiswa.php?nama=<?= $mhs["nama"];?>&npm=<?= $mhs["npm"]; ?>&email=<?= $mhs["email"];?>&jurusan=<?= $mhs["jurusan"]; ?>&gambar=<?= $mhs["gambar"]; ?>"><?= $mhs["nama"]; ?></a>
        </li>
    <?php endforeach; ?>

    </ul>


</body>
</html>