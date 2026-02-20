<?php

// di PHP terdapat 2 tipe data Number
// 1. (int) = yang terdiri dari bilangan bulat desimal, hexadesimal, octal, dan binary
// 2. (float) = bilangan pecahan 

echo "Desimal = \t";
var_dump(1234); // vardump untuk mengecek angka tersebut memiliki tipe data apa

echo "octal = \t";
var_dump(0123);

echo "hexadesimal = \t";
var_dump(0x1A);

echo "binary = \t";
var_dump(0b11111111);

echo "underscore in number = \t"; // garis bawah hanya untuk memudahkan membaca saat memiliki angka yang banyak dan tidak ditampilkan ke terminal
var_dump(1_234_234_821);

echo "float = \t";
var_dump(12.343);

echo "floating point dengan E notation plus = (1.7 x 1000) = ";
var_dump(1.7e3);

echo "floating point dengan E notation minus = (1.7 x 0.001) = ";
var_dump(1.7e-3);

echo "underscore di floating point = ";
var_dump(1_231.456);