<?php

$mahasiswa = [
    "001" => "danda",
    "002" => "Budi",
    "003" => "hafsal",
    "004" => "Dhini",
    "005" => "Erwin"
];

// Untuk memasukkan value, kita harus membuat key yang merepresentasikan valuenya.
// Tanda "=>" dapat diartikan sebagai merujuk ke
// "Key" => "Value"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Array Associative</title>
</head>
<body>
<?php foreach ($mahasiswa as $nrp => $nama) : ?>
    <li><?php echo "$nrp : $nama"; ?></li>
<?php endforeach; ?>
</body>
</html>