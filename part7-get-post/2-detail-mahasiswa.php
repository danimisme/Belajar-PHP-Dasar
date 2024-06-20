<?php
if (!isset($_GET["nama"]) ||
    !isset($_GET["nrp"]) ||
    !isset($_GET["email"]) ||
    !isset($_GET["jurusan"]) ||
    !isset($_GET["gambar"])) {
    // redirect
    header("Location: 1-daftar-mahasiswa.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Mahasiswa</title>
</head>
<body>
    <ul>
        <li>
            <img src=<?= $_GET["gambar"] ?> alt="" style="width:100px">
        </li>
        <li> <?= $_GET["nama"]; ?> </li>
        <li><?= $_GET["npm"]; ?></li>
        <li><?= $_GET["email"]; ?></li>
        <li> <?= $_GET["jurusan"]; ?></li>
    </ul>

    <a href="1-daftar-mahasiswa.php"> Kembali ke daftar mahasiswa</a>
</body>
</html>