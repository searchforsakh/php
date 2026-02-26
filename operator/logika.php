<?php

// operator logika adalah operator untuk membandingkan dua nilai boolean
// hasil dari operator logika adalah boolean lagi

$angka = 123;
$huruf = "Sakha";

echo $angka && $huruf; // akan true, karena php mengkonversi ke tipe data yang sama secara otomatis (type juggling) 
echo "\n";
echo $angka or $huruf; 
echo "\n";
echo false xor false; // 
