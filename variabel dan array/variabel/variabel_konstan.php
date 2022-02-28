<?php
// definisikan konstansta
define('PHI',3.14);
define('DBNAME','db_mahasiswa');
define('DBSERVER','localhost');
define('DBUSER','root');
define('DBPASS','zakki');


//Deklarasi variabel
$jari = 10;
$luas = PHI * $jari * $jari;
$keliling = 2 * PHI * $jari;

//Menampilkan hasil
echo 'luas lingkaran : '.$luas."<br>";
echo 'keliling lingkaran : '.$keliling;

echo "<hr>";

//menampilkan Konstanta
echo 'Nama Database : '.DBNAME;"<br>";
echo 'Server Database : '.DBSERVER;
echo 'Nama User Database : '.DBUSER.'<br>';
echo 'Password Databse : '.DBPASS.'<br>';

?>