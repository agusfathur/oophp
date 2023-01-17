<?php
require 'App/init.php';

// $produk1 = new Komik("Naruto", "Mashasi Kisimoto","Shonen Jump", 30000,100);

// $produk2 = new Game("Uncharted" , "Mbuh","Sony Comp", 250000,50);

// $cetakProduk = new CetakInfoProduk;

// $cetakProduk->tambahProduk($produk1);
// $cetakProduk->tambahProduk($produk2);

// echo $cetakProduk->cetak();

// Alias
use App\Service\User as ServiceUser;
use App\Produk\User as ProdukUser;

new ServiceUser();
echo "<br>";

new ProdukUser();
