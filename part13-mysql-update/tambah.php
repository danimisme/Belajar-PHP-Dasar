<?php

require 'functions.php';

if (isset($_POST["submit"])) {
    // cek apakah data berhasil ditambahkan
    if (tambah($_POST) >0) {
            echo "
            <script>
                alert('data berhasil ditambahkan');
                document.location.href = 'index.php';
            </script>
            ";
    } else {
        echo "
        alert('data gagal ditambahkan');
        ";
    }

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data mahasiswa</title>
</head>
<body>
    <h1>Input Data Mahasiswa</h1>
    <form action="" method="post">
        <div style="margin-top:20px;">
            <label for="nrp">NRP : </label>
            <input type="text" name="nrp" id="nrp">
        </div>
        <div style="margin-top:20px;">
            <label for="nama">Nama : </label>
            <input type="text" name="nama" id="nama">
        </div>
        <div style="margin-top:20px;">
            <label for="email">Email : </label>
            <input type="email" name="email" id="email">
        </div>
        <div style="margin-top:20px;">
            <label for="jurusan">Jurusan : </label>
            <input type="text" name="jurusan" id="jurusan">
        </div>
        <div style="margin-top:20px;">
            <label for="gambar">Gambar : </label>
            <input type="text" name="gambar" id="gambar">
        </div>
        <button type="submit" name="submit" >Tambah Data</button>
    </form>
</body>
</html>