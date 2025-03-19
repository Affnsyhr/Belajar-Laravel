<?php

// Array 
// Variable yang dapat memiliki banyak nilai
// Elemen pada array boleh memiliki tipe data yang berbeda
// Pasangan antara key dan value
// Key-nya adalah index, yang dimulai dari 0

// Membuat Array Cara lama
$hari = array("Senin", "Selasa", "Rabu");
// Memuat Array Cara baru
$bulan = ["Januari", "Februari", "Maret"];
$arr1 = [123, "tulisan", false];
echo "<br>";

// Menampilkan Array
// var_dump() / print_r()
var_dump($hari);
echo "<br>";
print_r($bulan);
echo "<br>";
// Menampilkan 1 elemen pada array
echo $arr1[0];
echo "<br>"; 
echo $bulan[1];

// menambahakn elemen baru pada array
var_dump($hari);
$hari[] = "Kamis";
$hari[] = "Jumat";
echo "<br>";
var_dump($hari);

// Pengulangan pada Array
// for / foreach
echo "<br>";
for ($i = 0; $i < count($hari); $i++) {
    echo $hari[$i] . "<br>";
}
echo "<br>";
foreach ($bulan as $b) {
    echo $b . "<br>";
}

?>

