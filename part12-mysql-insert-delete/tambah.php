<?php

$conn = mysqli_connect('localhost','root','','phpdasar');

if (isset($_POST["submit"])) {
    //ambil data dari form
    $nrp = $_POST["nrp"];
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $jurusan = $_POST["jurusan"];
    $gambar = $_POST["gambar"];

    // query insert data
    $query = "INSERT INTO mahasiswa VALUES ('', '$nrp' , '$nama' , '$email' , '$jurusan', '$gambar')";
    mysqli_query($conn,$query);

    //cek apakah data berhasil di input atau tidak
    if (mysqli_affected_rows($conn) > 0){
        echo "berhasil";
    } else {
        echo "gagal !";
        echo "<br>";
        echo mysqli_error($conn);
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