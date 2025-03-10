<?php
// Pertemuan 4 - Function 
// Function adalah potongan program yang dibuat untuk mempermudah dalam penulisan program
// Ada dua jenis function di PHP yaitu: 
// 1. Built-in Function (fungsi bawaan PHP)
// 2. User-defined Function (fungsi yang kita buat sendiri)

// Built-in Function
// 1. Date/Time
// 2. String    
// 3. Array
// 4. Math
// 5. Dll

// 1. Date/Time
// date() -> untuk menampilkan tanggal dengan format tertentu
echo date("l, d-M-Y"); // menampilkan tanggal sekarang
// time() -> untuk menampilkan waktu dalam detik yang sudah berlalu sejak 1 Januari 1970
echo date("l, d M Y", time() + 60*60*24*100); // menampilkan tanggal 2 hari ke depan 
// mktime() -> untuk membuat waktu sendiri
// rumus mktime(jam,menit,detik,bulan,tanggal,tahun)
echo date ("l d M Y ",mktime (0,0,0,9,05,2002)); // menampilkan waktu dalam detik yang sudah berlalu sejak 1 Januari 1970
// strtotime() -> untuk mengubah string menjadi format waktu
echo date("l",strtotime("05 sep 2002"));

// 2. String
// strlen() -> untuk menghitung panjang karakter
echo strlen("Hello World");
// strcmp() -> untuk membandingkan dua buah string  
echo strcmp("Hello","Hello");
// explode() -> untuk memecah string menjadi array
// rumus explode(delimiter,string)
$nama = "Rizky Fadillah";
$pecah = explode(" ",$nama);
echo $pecah[0]; // menampilkan Rizky
// htmlspecialchars() -> untuk mengamankan inputan user
echo htmlspecialchars("<script>alert('Hello World')</script>");
// strtolower() -> untuk mengubah string menjadi huruf kecil
echo strtolower("HELLO WORLD");
// strtoupper() -> untuk mengubah string menjadi huruf besar
echo strtoupper("hello world");
// substr() -> untuk mengambil sebagian string
// rumus substr(string,awal,panjang)    
echo substr
("Hello World",6,5); // menampilkan World

// 3. Array
// count() -> untuk menghitung jumlah elemen dalam array
$hari = array("Senin","Selasa","Rabu");
echo count($hari);
// sort() -> untuk mengurutkan array secara ascending
sort($hari);
// rsort() -> untuk mengurutkan array secara descending
rsort($hari);
// in_array() -> untuk mencari nilai dalam array
echo in_array("Senin",$hari);
// array_unique() -> untuk menghapus elemen array yang sama
$angka = array(1,2,3,4,5,1,2,3);
$angka = array_unique($angka);
// array_merge() -> untuk menggabungkan dua buah array
$angka1 = array(1,2,3);
$angka2 = array(4,5,6);
$angka = array_merge($angka1,$angka2);

// 4. Math
// ceil() -> untuk membulatkan ke atas
echo ceil(4.5);
// floor() -> untuk membulatkan ke bawah
echo floor(4.5);
// rand() -> untuk menghasilkan angka random
echo rand(1,100);
// max() -> untuk mencari nilai terbesar
echo max(1,2,3,4,5);
// min() -> untuk mencari nilai terkecil
echo min(1,2,3,4,5);
// sqrt() -> untuk mencari akar kuadrat
echo sqrt(16);

// Utilitas
// var_dump() -> untuk menampilkan informasi dari variabel
$angka = 10;
var_dump($angka);
// isset() -> untuk mengecek apakah sebuah variabel sudah dibuat atau belum
echo isset($angka);
// empty() -> untuk mengecek apakah sebuah variabel kosong atau tidak
echo empty($angka);
// die() -> untuk memberhentikan program
echo "Hello World";
die();
echo "Hello World";
// sleep() -> untuk memberhentikan program sementara
echo "Hello World";
sleep(5);
echo "Hello World";



















?>