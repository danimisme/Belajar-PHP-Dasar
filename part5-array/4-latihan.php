<?php
$mahasiswa = ["Muhammad Subhan", "201943500087", "Teknik Informatika", "msubhanr53@gmail.com"];

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
    <ul>
        <?php foreach ($mahasiswa as $m){ ?>
            <li> <?php echo $m ?></li>
        <?php } ?>
    </ul>
    
</body>
</html>