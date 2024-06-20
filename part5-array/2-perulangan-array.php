<?php
//perulangan pada array

$angka = [3,2,15,20,11,77,89,8];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Looping</title>
    <style>
        div {
            width: 50px;
            height: 50px;
            background-color: salmon;
            text-align: center;
            line-height: 50px;
            margin: 3px;
            float: left;
        }
    </style>
</head>
<body>
    <h1>Menampilkan Array dengan perulangan</h1>
    
    <?php for($i=0; $i< count($angka) ; $i++) {?>
        <div>
            <?php echo $angka[$i]; ?>
        </div>
    <?php } ?>
</body>
</html>