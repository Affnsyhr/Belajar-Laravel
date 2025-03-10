<?php
// User-defined Function
// 1. Membuat Function
// function salam($waktu = "Datang",$nama = "Admin"){
//     return "Selamat $waktu, $nama!";
// }
// echo salam("Pagi","Rizky Fadillah");


// 2. Membuat Function dengan Parameter
// function tambah($angka1,$angka2){
//     return $angka1 + $angka2;
// }
// echo tambah(10,5);

function salam($waktu, $nama) {
    return "Selamat Datang, $nama!";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?php echo salam("Pagi","Akmal"); ?></h1>
</body>
</html>