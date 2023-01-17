<?php 
// Cosntanta
// define(name, value);
// const var,

// define('NAMA', 'Agus Fathur');
// // tdk bisa masuk kelas, harus global

// echo NAMA;
// echo "<br>";

// const UMUR = 18;
// //  bisa masuk kelas
// echo UMUR;

// class Coba{
//     const NAMA = 'Agus Fathur Rozi';

// }

// // cetak Class::method
// echo Coba::NAMA;

// echo __LINE__; // CETAK BARIS
// echo __FILE__; // cetak path file

// function coba(){
//     return __FUNCTION__;
// }

// echo coba();

class Coba{
    public $kelas  = __CLASS__;
}

$obj = new Coba();
// echo $object->kelas;
echo $obj->kelas;
echo __DIR__;










?>