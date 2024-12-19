<?php
function perkalian($a,$b) 
{
    $hasil = $a * $b;
    return $hasil;
}
$hasil = perkalian (5,6);
echo $hasil;
echo "br";
$a = 5;
$b = 6;
echo 'hasil perkalian ' .$a. ' x '.$b.' adalah: '.perkalian($a,$b);
?>F