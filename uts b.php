<?php
// Array multidimensi untuk menyimpan informasi produk
$data_produk = [
    ["ID" => 1, "Produk" => "Buavita", "Stok" => 30, "Harga" => 10890],
    ["ID" => 2, "Produk" => "Bango", "Stok" => 21, "Harga" => 21890],
    ["ID" => 3, "Produk" => "Sariwangi", "Stok" => 10, "Harga" => 9990],
    ["ID" => 4, "Produk" => "Shampo Baby", "Stok" => 15, "Harga" => 21980],
    ["ID" => 5, "Produk" => "Bedak", "Stok" => 25, "Harga" => 14990],
    ["ID" => 6, "Produk" => "Baju Bayi", "Stok" => 5, "Harga" => 35980],
    ["ID" => 7, "Produk" => "Jumper", "Stok" => 25, "Harga" => 49990]
];

// Menampilkan tabel HTML dari array multidimensi
echo "<h2>Tabel Harga Barang</h2>";
echo "<table border='1' cellpadding='5' cellspacing='0'>";
echo "<tr><th>ID</th><th>Produk</th><th>Stok</th><th>Harga (Rp)</th></tr>";

// Looping untuk menampilkan setiap data produk di dalam array multidimensi
foreach ($data_produk as $item) {
    echo "<tr>";
    echo "<td>{$item['ID']}</td>"; // Menampilkan kolom ID
    echo "<td>{$item['Produk']}</td>"; // Menampilkan kolom Produk
    echo "<td>{$item['Stok']}</td>"; // Menampilkan kolom Stok
    echo "<td>Rp " . number_format($item['Harga'], 0, ',', '.') . "</td>"; // Menampilkan kolom Harga dengan format Rupiah
    echo "</tr>";
}

echo "</table>";
?>


<?php
// Array multidimensi untuk menyimpan informasi produk
$data_produk = [
    ["ID" => 1, "Produk" => "Buavita", "Stok" => 30, "Harga" => 10890],
    ["ID" => 2, "Produk" => "Bango", "Stok" => 21, "Harga" => 21890],
    ["ID" => 3, "Produk" => "Sariwangi", "Stok" => 10, "Harga" => 9990],
    ["ID" => 4, "Produk" => "Shampo Baby", "Stok" => 15, "Harga" => 21980],
    ["ID" => 5, "Produk" => "Bedak", "Stok" => 25, "Harga" => 14990],
    ["ID" => 6, "Produk" => "Baju Bayi", "Stok" => 5, "Harga" => 35980],
    ["ID" => 7, "Produk" => "Jumper", "Stok" => 25, "Harga" => 49990]
];

// Menampilkan tabel HTML dari array multidimensi
echo "<h2>Tabel Harga Barang</h2>";
echo "<table border='1' cellpadding='5' cellspacing='0'>";
echo "<tr><th>ID</th><th>Produk</th><th>Stok</th><th>Harga (Rp)</th><th>Jumlah (Rp)</th></tr>";

// Looping untuk menampilkan setiap data produk di dalam array multidimensi
foreach ($data_produk as $item) {
    $jumlah = $item['Stok'] * $item['Harga']; // Menghitung kolom Jumlah (Stok * Harga)
    echo "<tr>";
    echo "<td>{$item['ID']}</td>"; // Menampilkan kolom ID
    echo "<td>{$item['Produk']}</td>"; // Menampilkan kolom Produk
    echo "<td>{$item['Stok']}</td>"; // Menampilkan kolom Stok
    echo "<td>Rp " . number_format($item['Harga'], 0, ',', '.') . "</td>"; // Menampilkan kolom Harga dengan format Rupiah
    echo "<td>Rp " . number_format($jumlah, 0, ',', '.') . "</td>"; // Menampilkan kolom Jumlah dengan format Rupiah
    echo "</tr>";
}

echo "</table>";
?>
