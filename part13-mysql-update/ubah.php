<?php

require 'functions.php';

// ambil data di url
$id = $_GET["id"];
// query data mahasiswa berdasarkan id
$mhs = query("SELECT * FROM mahasiswa WHERE id=$id")[0];


if (isset($_POST["submit"])) {
    // cek apakah data berhasil diubah
    if (ubah($_POST) >0) {
            echo "
            <script>
                alert('data berhasil diubah');
                document.location.href = 'index.php';
            </script>
            ";
    } else {
        echo "
        alert('data gagal diubah');
        ";
    }

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Data mahasiswa</title>
</head>
<body>
    <h1>Ubah Data Mahasiswa</h1>
    <form action="" method="post">
        <input type="hidden" name="id" value=<?= $mhs["id"]; ?>>
        <div style="margin-top:20px;">
            <label for="nrp">NRP : </label>
            <input type="text" name="nrp" id="nrp" value=<?= $mhs["nrp"]; ?>>
        </div>
        <div style="margin-top:20px;">
            <label for="nama">Nama : </label>
            <input type="text" name="nama" id="nama" value=<?= $mhs["nama"]; ?>>
        </div>
        <div style="margin-top:20px;">
            <label for="email">Email : </label>
            <input type="email" name="email" id="email" value=<?= $mhs["email"]; ?>>
        </div>
        <div style="margin-top:20px;">
            <label for="jurusan">Jurusan : </label>
            <input type="text" name="jurusan" id="jurusan" value=<?= $mhs["jurusan"] ?> >
        </div>
        <div style="margin-top:20px;">
            <label for="gambar">Gambar : </label>
            <input type="text" name="gambar" id="gambar" value=<?= $mhs["gambar"]?> >
        </div>
        <button type="submit" name="submit" >Ubah Data</button>
    </form>
</body>
</html>