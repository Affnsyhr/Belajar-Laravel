<?php 
// Syntax PHP - Dasar 
// Standar Ouput 
// echo, print : mencetak tulisan,variable
// print_r : mencetak isi pada array / digunakan saat tahap development
// var_dump : melihat isi dari variable
// echo bisa menggunakan titik 1 maupun titik 2
echo 2029;
echo true;
echo false;
echo "Akmal Irfansyahir"; // Mencetak String
print_r("Akmal Irfansyahir"); // Mencetak string dan array
var_dump("Akmal Irfansyahir"); // Mencetak informasi dalam bentuk type data

// Variabel dan Tipe Data
// Variabel
// tidak boleh diawali dengan angka, akan tetapi  boleh mengandung angka
$nama = "Akmal Irfansyahir";

// Operator
// Aritmatika ( +, - */ %)
$x = 2;
$y = 5;
echo $x * $y ;

// Operator Concat (Penggabungan)
// . 
$nama_depan = "Nauna";
$nama_belakang = "Ahsani";
echo $nama_depan . " " . $nama_belakang;

// Operator Assignment 
// =, +=, -=, *=, /=, %=, .=, .=
$g = 5;
$g += 12;
echo $g;

$nama = "Irfan";
$nama .= " ";
$nama .= "Syahir ";
echo $nama;

// Perbadingan
// ==, !=, ===, !==, <, >, <=, >=
var_dump(1 < 5);
var_dump(12>20);
var_dump(1 == "1");

// identity
// ===, !==
var_dump(1 === "1");

// Logika 
// &&, ||, !
var_dump(true && true);
$x = 10;;
var_dump($x < 20 && $x % 2 == 0);
?>

<!-- HTML ALLERT  -->
<!-- Penulisan syntax php  -->
<!-- 1. PHP didalam html -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
</head>
<body>
    <h1>Halo, Selamat datang <?php echo "$nama"; ?></h1>
</body>
</html>

<!--- 2. HTML didalam php --->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    echo "<h1>Halo, Selamat datang $nama</h1>"; ?>
    
</body>
</html>






