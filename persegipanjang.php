<?php
// Fungsi untuk menghitung luas persegi panjang
function hitungLuasPersegiPanjang($panjang, $lebar) {
    // Menghitung luas
    $luas = $panjang * $lebar;
    
    // Mengembalikan nilai luas
    return $luas;
}

// Contoh penggunaan fungsi
$panjang = 12;
$lebar = 6;

echo "hasil perkalian  $panjang  x  $lebar  adalah " . hitungLuasPersegiPanjang($panjang, $lebar);
?>