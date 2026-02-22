<?php

// array adalah tipe data yang berisikan data kosong atau banyak data, bisa berisikan data dengan jenis yang berbeda
// array di php tidak memiliki batas kapasitas

$angka = array(12,32,6.7,-2);
var_dump($angka);

$nama = ["Sakha", "Pratama" , "Sudiro", true];
var_dump($nama);

// mengakses data
$nama = ["Sakha", "Pratama" , "Sudiro"];
echo "nama kedua saya adalah ", $nama[1];
echo "\n";

$nama = ["Sakha", "Pratama" , "Sudiro"];
echo "nama ketiga saya adalah ";
echo $nama[2];
echo "\n";

// mengubah data pada nomor index
$nama = ["Sakha", "Pratama" , "Sudiro"];
echo "nama kedua saya adalah ", $nama[1] = "romeny";
echo "\n";

$nama = ["Sakha", "Pratama" , "Sudiro"];
$nama[2] = "Tora";
echo "nama ketiga saya adalah ", $nama[2];
echo "\n";

// menambah data pada posisi array diposisi paling belakang
$nama = ["Sakha", "Pratama" , "Sudiro"];
$nama[] = 11;
echo "umur saya adalah ", $nama[3];
echo "\n";

// menghapus data di array, index otomatis hilang dari array
$nama = ["Sakha", "Pratama" , "Sudiro"];
unset($nama[1]);
echo "nama saya adalah ", $nama[0];
echo "\n";

// mengambil total data di array
$nama = ["Sakha", "Pratama" , "Sudiro"];
echo "total data adalah ", count($nama);
echo "\n";

// membuat map menggunakan array
$mahasiswa = [
    "nama" => [
        1 => "sakha",
        2 => "budi"
        ],
        "NIM" => [20250801037, 20250801001],
        "Kampus" => "UEU", "USAKTI"
        ];
        
        echo "nama = ", $mahasiswa["nama"][1];
        echo "\n";
        echo "NIM = ", $mahasiswa["NIM"][0];
        echo "\n";
        echo "Kampus = ", $mahasiswa["Kampus"]; // jika ingin mengakses usakti, maka harus dibuat array terlebih dahulu