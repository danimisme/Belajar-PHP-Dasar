<?php

require 'db_functions.php';

$mahasiswa = query('SELECT * FROM mahasiswa');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel Nilai</title>
</head>
<body>
    <h1>Daftar Nilai</h1>
    <table border="1" cellpadding="10" cellspacing="0" >
        <tr>
            <th>Nama Mahasiswa</th>
            <th>Nilai</th>
            <th>Keas</th>
            <th>Gender</th>
        </tr>
        <?php foreach($mahasiswa as $mhs) : ?>
            <tr>
                <td> <?= $mhs['nama_mahasiswa'] ?></td>
                <td> <?= $mhs['nilai_ujian'] ?> </td>
                <td> <?= $mhs['kelas'] ?> </td>
                <td> <?= $mhs['gender'] ?> </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>