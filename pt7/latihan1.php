<?php
// Variabel Scope / Lingkup Variabel
// $x = 10; // Variabel Global

// function test() {
//     global $x; // Variabel Global
//     echo $x;
// }
// test();
// echo $x; // Error: Undefined variable: x

// variabel superglobal
// $_GET
// $_POST
// $_REQUEST
// $_SESSION
// $_COOKIE
// $_SERVER
// $_ENV

// Superglobal
// variable global milik PHP
// merupakan Array Asosiatif
// bisa diakses dimanapun dan kapanpun
// bisa diakses oleh fungsi atau method
// bisa diakses oleh file PHP yang berbeda

// var_dump($_GET);
// var_dump($_POST);
// var_dump($_REQUEST);
// var_dump($_SESSION);
// var_dump($_COOKIE);
// var_dump($_SERVER);
// var_dump($_ENV);

// echo $_SERVER['SERVER_NAME'];
// echo "<br>";
// echo $_SERVER['SERVER_ADDR'];
// echo "<br>";
// echo $_SERVER['SERVER_PORT'];
// echo "<br>";
// echo $_SERVER['SERVER_SOFTWARE'];
// echo "<br>";
// echo $_SERVER['SERVER_PROTOCOL'];
// echo "<br>";
// echo $_SERVER['REQUEST_METHOD'];
// echo "<br>";
// echo $_SERVER['REQUEST_TIME'];
// echo "<br>";
// echo $_SERVER['QUERY_STRING'];
// echo "<br>";
// echo $_SERVER['HTTP_USER_AGENT'];
// echo "<br>";
// echo $_SERVER['REMOTE_ADDR'];
// echo "<br>";
// echo $_SERVER['SCRIPT_FILENAME'];
// echo "<br>";
// echo $_SERVER['SCRIPT_NAME'];
// echo "<br>";
// echo $_SERVER['SCRIPT_URI'];

// Metode Request
// GET
// POST

// $_GET['nama'] = "Akmal Irfansyahir";
// $_GET['umur'] = 22;
// $_GET['pekerjaan'] = "Mahasiswa";
// $_GET['jurusan'] = "Information System";
// $_GET['semester'] = 6;
// $_GET['nim'] = "2200016058";
// $_GET['hobi'] = "Programming";
// $_GET['status'] = "Belum Menikah";
// Cara mengirimkan request dengan menggunakan metode get :
// http://localhost/belajarphp/pt7/latihan1.php?nama=AkmalIrfansyahir
// var_dump($_GET);

$student = [
    [
        "nama" => "Akmal Irfansyahir",
        "nim" => "22000016058",
        "jurusan" => "Information System",
        "email" => "masna29@gmail.com",
        "gambar" => "uknown.jpg"
    ],
    [
        "nama" => "Sauqhy Faishal Al Affani",
        "nim" => "22000016059",
        "jurusan" => "Information System",
        "email" => "anehbener@gmail.com",
        "gambar" => "kemtos.jpg"
    ]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Methode GET </title>
</head>
<body>
<h1>Daftar Mahasiswa</h1>
<ul>
    <?php foreach($student as $std) : ?>
        <li>
            <a href="latihan2.php?nama=<?= $std["nama"]; ?>&nim=<?= $std["nim"]; ?>&jurusan=<?= $std["jurusan"]; ?>&email=<?= $std["email"]; ?>&gambar=<?= $std["gambar"]; ?>"><?= $std["nama"]; ?></a>
        </li>
    <?php endforeach; ?>
</body>
</html>
?>