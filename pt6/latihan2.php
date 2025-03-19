<?php
// Belajar Array Associative
// definisi sama seperti array numerik, kecuali key-nya adalah string yang kita buat sendiri
// key-nya adalah nama-nama mahasiswa
$student = [
    ["nama" =>"Akmal Irfansyahir","nim" =>"22000016058","jurusan"=> "Information System","email" =>"masna29@gmail.com", "gambar"=> "uknown.jpg"],
    ["nama" =>"Sauqhy Faishal Al Affani","nim" => "22000016059", "jurusan" => "Information System","email" =>"anehbener@gmail.com"], "gambar"=> "kemtos.jpg"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student List </title>
</head>
<body>

<h1>Student List</h1>
<?php foreach( $student as $s ) : ?>
    <ul>
        <li>Nama : <?= $s["nama"]; ?></li>
        <li>NIM : <?= $s["nim"]; ?></li>
        <li>Jurusan : <?= $s["jurusan"]; ?></li>
        <li>Email : <?= $s["email"]; ?></li>
        <li><img src="img/<?= $s["gambar"]; ?>"></li>
    </ul>
<?php endforeach; ?>

</body>
</html>