<?php

$first = [
    "firstname" => "sakha"
    ];
    
    $last = [
    "firstname" => "sakha", // php tidak menampilkan key array yang sama dengan yg diatasnya
    "nama pertama" => "budi",
    "lastname" => "pratama"
];

$full = $first+$last;
var_dump($full);
// echo $full; // echo tidak bisa menampilkan array, hanya bisa string dan angka.