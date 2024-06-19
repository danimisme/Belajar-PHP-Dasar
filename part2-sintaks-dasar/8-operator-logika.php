<?php 
//Operator Logika
// && (and), || (or), ! (not)

$x = 10;
$y = 15;
echo "<br> apakah $x lebih kecil dari $y? dan $x adalah genap?";
var_dump($x < $y && $x % 2 == 0 );
echo "<br> apakah $y lebih kecil dari $x? dan $y adalah genap?";
var_dump($y < $x && $y %2 == 0);

echo "<br> apakah $x lebih kecil dari $y? atau $x adalah ganjil?";
var_dump($x < $y || $x % 2 != 0 );
echo "<br> apakah $y lebih kecil dari $x? atau $y adalah ganjil?";
var_dump($y < $x || $y %2 != 0);

?>