<?php
session_start();

if(!isset($_SESSION["login"])){
    header("Location: login.php");
    exit;
}

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
    <form action="" method="post" enctype="multipart/form-data" >
        <input type="hidden" name="id" value=<?= $mhs["id"]; ?>>
        <input type="hidden" name="gambarLama" value=<?= $mhs["gambar"]; ?>>
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
            <label for="gambar">Gambar : </label> <br>
            <img src="img/<?= $mhs['gambar']; ?>" alt="" width="100"> <br>
            <input type="file" name="gambar" id="gambar"  > 
        </div>
        <br>
        <button type="submit" name="submit" >Ubah Data</button>
    </form>
</body>
</html>