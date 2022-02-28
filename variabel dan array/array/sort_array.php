<?php
//array buah
$array_buah = [
    'p' => 'pisang',
    'j' => 'jeruk',
    'a' => 'apel',
    'm' => 'mangga'
];

//menampilkan array dengan foreach list
echo '<ol>';
foreach ($array_buah as $key => $value) {
    echo '<li>'.$key.' - '.$value.'</li>';
}
echo '</ol>';
?>