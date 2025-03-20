<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Method POST</title>
</head>
<body>
<?php if( isset($_POST["submit"]) ) : ?>
    <h1>Selamat Datang, <?= $_POST["nama"]; ?></h1>
    <?php endif; ?>
    
<form action="latihan4.php" method="post">
    <label for="nama">Nama :</label>
    <input type="text" name="nama" id="nama">
    <br>
    <label for="nim">NIM :</label>
    <input type="text" name="nim" id="nim">
    <br>
    <label for="jurusan">Jurusan :</label>
    <input type="text" name="jurusan" id="jurusan">
    <br>
    <label for="email">Email :</label>
    <input type="text" name="email" id="email">
    <br>
    <button type="submit" name="submit">Kirim</button>
</form>
</body>
</html>