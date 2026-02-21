<?php

// nilai null mempresentasikan sebuah variable tanpa nilai
// saat kita membuat variable, lalu ingin menghapus data yang ada di variable tersebut, kita bisa menggunakan NULL untuk mengosongkan variable tersebut
// untuk membuat NULL, kita bisa menggunakan kata kunci NULL/null

$nama = "Sakha Pratama";
echo "Nama saya = ", $nama, "\n";

$umur = 20; // menghapus value, tetapi tidak dengan variable
echo "umur saya = ", $umur, "\n";

echo "is name NULL ? = ";
var_dump(is_null($nama)); // untuk mengecek apakah variable bernilai null atau tidak

// selain mengubah menjadi null, di php juga bisa menghapus sebuah variable dengan menggunakan function unset($variable)
$band = "Sakha Pratama";
unset($band); // unset menghapus variable dan valuenya
// echo $band; // akan error jika dirun

// isset() = untuk mengecek apakah variable tersebut ada atau tidak, serta mengecek isinya null atau tidak
$band = "Sakha Pratama";
unset($band); // unset menghapus variable dan valuenya
// echo $band; // akan error jika dirun
$band = "sakha";
var_dump(isset($band)); 
// echo (isset($band) ? 'true' : 'false');