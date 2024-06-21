<?php
// cek apakah tombol submit sudah di tekan apa belum
if (isset($_POST["submit"])) {
    //cek username & password
    if ( $_POST["username"] == "admin" && $_POST["password"] == "123") {
        //jika benar redirect ke halaman admin
        header("Location: admin.php");
        exit;
    } else {
        //jika salah
        $error = true;
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Login Admin</h1>

    <?php if(isset($error)) : ?>
    <p style="color: red; font-style:italic;" >Username atau password salah</p>
    <?php endif; ?>

    <form action="" method="post">
    <div>
        <label for="username">Username :</label>
        <input id="username" type="text" name="username"> 
    </div>
    <div>
        <label for="password">Password :</label>
        <input id="password" type="password" name="password">
    </div>
    <div>
        <button type="submit" name="submit">Login</button>
    </div>

    </form>
</body>
</html>