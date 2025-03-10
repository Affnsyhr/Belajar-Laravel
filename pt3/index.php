<?php
// // PERTEMUAN 3 - PENGULANGAN & PENGKONDISIAN
// // 1. PENGULANGAN
// // for,while, do..while, foreach(pengulangan khusus array)

// // a. for
for( $i = 0; $i < 5; $i++ ) { 
    echo "Perulangan ke-$i<br> ";
}

// // b. while
$i = 0;
while($i < 3 ) {
    echo "Guru $i<br> ";
$i++;
}
// // perbedaan antara while dan do..while, 
// // do..while akan dikerjakan 1 kali dalam posisi variable tidak sesuai 
// // dan sebaliknya while tidak akan dikerjakan sama sekali jika variable tidak sesuai
// // c. do..while
do {
    echo "Saya masih di dalam kelas selama <br> ";
    $i++;
} while ( $i < 5 );

// // 2. PENGKONDISIAN
// // if, else if, else, ternary, switch
// // a. if else
$x = 10;
if( $x < 20 ) {
    echo "Benar";
}else if ( $x == 20 ) {
    echo "Bingo!";
} else {
    echo "Salah";
}




?>

<!-- Cara penulisan ke-1 dalam pengulangan menggunakan for -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 1</title>
</head>
<body>
    <table border ="1" cellpadding="10" cellspacing="0" >
        <?php
            for($i = 1; $i <= 3; $i++) {
                echo "<tr>";
                for($j = 1; $j <= 5; $j++) {
                    echo "<td>$i,$j</td>";
            }
            echo "</tr>";
            }
        ?>
    </table>
    
</body>
</html>

<!-- Cara penulisan ke-2  -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table border ="1" cellpadding="10" cellspacing="0" >
    <?php for ($i = 1; $i <= 3; $i++) : ?>
        <tr>
            <?php for ($j = 1; $j <= 5; $j++) : ?>
                <td><?php echo "$i,$j"; ?></td>
            <?php endfor; ?>
        </tr>    
        <?php endfor; ?>
</table>
</body>
</html>

<!-- Mengganti warna dari tabel yang ada PENGKONDISIAN  -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .warna-baris {
            background-color: silver;
        }
    </style>
</head>
<body>
<table border ="1" cellpadding="10" cellspacing="0" >
    <?php for ($i = 1; $i <= 5; $i++) : ?>
        <?php if ($i % 2 == 1) : ?>
            <tr class="warna-baris">
        <?php else : ?>
            <tr>
        <?php endif; ?>
            <?php for ($j = 1; $j <= 5; $j++) : ?>
                <td><?php echo "$i,$j"; ?></td>
            <?php endfor; ?>
        </tr>    
        <?php endfor; ?>
</table>
</body>
</html>
