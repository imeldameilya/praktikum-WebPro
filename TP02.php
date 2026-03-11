<?php

$desimal = 100;

$hex = "";
$angkaHex = array("0","1","2","3","4","5","6","7","8","9","A","B","C","D","E","F");

while($desimal > 0){

    $sisa = $desimal % 16;
    $hex = $angkaHex[$sisa] . $hex;

    $desimal = (int)($desimal / 16);
}
echo "Hasil Hexadecimal : " . $hex;

?>