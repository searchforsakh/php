<?php

var_dump(10 == "10"); // akan selalu true, karena php mengkonversi ke tipe data yang sama secara otomatis (type juggling) 
var_dump(10 === "10"); // false jika tipe datanya beda

var_dump(10<9);
var_dump(10>=9);
