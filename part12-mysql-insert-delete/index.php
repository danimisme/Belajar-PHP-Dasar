<?php

require 'functions.php';

$mahasiswa = query("SELECT * FROM mahasiswa");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <a href="tambah.php">Tambah data mahasiswa</a>
    <br>
    <br>

    <table border="1" cellpadding="10" cellspacing="0" >
    <tr>
        <th>No.</th>
        <th>Aksi</th>
        <th>Gambar</th>
        <th>NRP</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Jurusan</th>
    </tr>
    <?php $i=1; ?>
    <?php foreach($mahasiswa as $mhs) : ?>

    <tr>
        <td> <?= $i ?></td>
        <td>
            <a href="">ubah</a>
            | <a href="hapus.php?id=<?= $mhs["id"]?>">hapus</a>
        </td>
        <td>
            <img src="img/<?= $mhs["gambar"] ?>" alt="" width="50">
        </td>
        <td><?= $mhs["nrp"] ?></td>
        <td><?= $mhs["nama"] ?></td>
        <td><?= $mhs["email"] ?></td>
        <td><?= $mhs["jurusan"] ?></td>
    </tr>
    <?php $i++; ?>
    <?php endforeach; ?>

    </table>
</body>
</html>