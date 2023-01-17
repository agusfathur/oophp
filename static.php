<?php 
// STATIC, akses langsung property dan method langsung tanpa object
// echo ContohStatic::$angka;
// echo ContohStatic::halo();

// Kegunaan
// terikat class bukan object
// nilai static akan selalu tetap, tidak direset
// kode seperti procedural
//  function helper;
// biasa digunakan class utility pada framework

// class ContohStatic{
//     public static $angka = 1;

//     public static function halo(){
//         // khusus static
//         return"Halo.". self::$angka++."Kali.";;
//     }

// }
// echo ContohStatic::$angka;
// echo "<br>";
// echo ContohStatic::halo();
// echo "<hr>";
// echo ContohStatic::halo();

class Contoh{
    public static $angka = 1;

    public function halo(){
        return "Halo. ".self::$angka++." kali. <br>";
    }
}

$obj = new Contoh();
echo $obj->halo();
echo $obj->halo();
echo $obj->halo();
echo $obj->halo();

echo "<hr>";

$OBJ2 = new Contoh();
echo $OBJ2->halo();
echo $OBJ2->halo();
echo $OBJ2->halo();
echo $OBJ2->halo();





