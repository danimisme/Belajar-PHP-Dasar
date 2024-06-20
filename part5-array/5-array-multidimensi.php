<?php
$mahasiswa = [
    ["Muhammad Subhan", "201943500087", "Teknik Informatika", "msubhanr53@gmail.com"],
    ["Sandhika galih", "201943500001", "Teknik Informatika", "sandhika@gmail.com"],
    ["Erik","20194350009","Teknik Informatika","erik@gmail.com"]
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
   
        <?php foreach ($mahasiswa as $mhs){ ?>
            <ul>
            <?php foreach($mhs as $m) { ?>
                <li> <?= $m ?> </li>
            <?php } ?>
            </ul>
        <?php } ?>

    
</body>
</html>