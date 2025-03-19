<?php
// array multi dimensional 
$student = [
    ["Akmal Irfansyahir", "2200016058", "Sistem Informasi", "masna29@gmail.com"],
    ["Nauna Ahsani Syafitri", "2000019021", "Bahasa Arab", "naunaahsan22@gmail.com"]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student List</title>
</head>
<body>

<h1>Student List</h1>
<?php foreach ($student as $s) : ?>
<ul>
    <li>Nama: <?= ($s[0]); ?></li>
    <li>NIM :<?= ($s[1]); ?></li>
    <li>Jurusan :<?=($s[2]); ?></li>
    <li>Email :<?= ($s[3]); ?></li>
</ul>
<?php endforeach; ?>

</body>
</html>
