<?php
//deklarasi array
$array_buah = ['pisang', 'jeruk', 'apel', 'mangga'];

//menampilkan array
echo 'menampilkan data array 0 =>'.$array_buah[0].'<br>';

//menampilkan jumlah array
echo "menampilkan jumlah data array => ".count($array_buah).'<br>';
echo '<hr>';

//menampilkan array dengan foreach
foreach ($array_buah as $key => $key) {
    echo 'Menambahkan data array ke-'.$key.' => '.$value.'<br>';
}
echo '<br>';

//menampilkan array dengan list
echo '<ol>';
foreach ($array_buah as $value) {
    echo '<li>'.$value.'</li>';
}
echo '</ol>';
?>