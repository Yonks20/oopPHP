<?php

// Nama konstanta nya dan isinya arau valuenya
// define("NAMA", 'Yonkie Yudha');
// echo NAMA;

// echo "<br>";

// const UMUR = 32;
// echo UMUR;

//define gabisa disimpan di sebuah class sebagai global
//const bisa dimasukkan kedalam kelas

// class Coba{
//     const NAMA = "Yonkie Yudha";
// }

// echo Coba::NAMA;

// Magic Constant

// echo __LINE__;
// echo __FILE__;


function coba(){
    return __FUNCTION__;
}

echo coba()


//akan menampilkan baris constant ini ditulis




?>