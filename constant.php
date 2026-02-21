<?php

// constant adalah tempat untuk menyimpan data yang tidak bisa dirubah lagi setelah di deklarasikan
// sifatnya sama seperti variable, bedanya tidak bisa diubah ubah valuenya
// untuk membuat constant kita bisa menggunakan function define() dan gunakan UPPER_CASE

define("NAMA", "Sakha Pratama");
define("UMUR", 19);

// $UMUR = 20;

echo "Nama Saya = ", NAMA, "\n";

echo "Umur Saya = ";
echo UMUR;