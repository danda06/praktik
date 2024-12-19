<?php
// membuat fungsi
function perkalian ($a, $b) 
{
    $hasil = $a * $b;
    return $hasil;
}

// memanggil fungsi
$hasil = perkalian (3, 4);
echo $hasil; // hasil 9
echo "<br>";
$a = 3;
$b = 4;
echo 'hasil perkalian ' . $a . ' x ' . $b . ' adalah: ' . perkalian ($a, $b);
?>