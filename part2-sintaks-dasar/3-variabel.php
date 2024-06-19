<?php
//Variabel tidak boleh diawali dengan angka, tapi boleh mengandung angka 
$nama = "Muhammad Subhan Ramdhani";
// jika menggunakan kutip dua dapat menggunakan interpolasi atau menggunakan variabel
echo "nama saya $nama"

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
</head>
<body>
    <h1>Halo, Selamat datang!</h1>
    <p>Nama saya <?php echo $nama; ?></p>
</body>
</html>