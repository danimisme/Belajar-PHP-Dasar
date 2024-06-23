<?php
session_start();

if(!isset($_SESSION["login"])){
    header("Location: login.php");
    exit;
}

require 'functions.php';

$mahasiswa = query("SELECT * FROM mahasiswa");

// tombol cari di klik
if (isset($_POST["cari"])){
    $mahasiswa = cari($_POST["keyword"]);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>
<body>
    <a href="logout.php">Logout</a>
    <h1>Daftar Mahasiswa</h1>
    <a href="tambah.php">Tambah data mahasiswa</a>
    <br>
    <br>

    <form action="" method="POST">
        <input type="text" name="keyword" id="keyword" size="50" autofocus placeholder="Cari data ... " autocomplete="off">
        <button type="submit" name="cari"  id="tombol-cari" >Cari</button>
    </form>
    <br>
    <div id="container">

    
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
            <a href="ubah.php?id=<?= $mhs["id"] ?>">ubah</a>
            | <a href="hapus.php?id=<?= $mhs["id"]?>"
            onclick="return confirm('Haspus data <?= $mhs['nama'] ?> ?');"
            
            >hapus</a>
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
    </div>
    <script src="jquery-3.7.1.min.js"></script>
    <script src="js/script.js">

    </script>
</body>
</html>