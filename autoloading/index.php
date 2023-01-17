<?php
require 'App/init.php';

$produk1 = new Komik("Naruto", "Mashasi Kisimoto","Shonen Jump", 30000,100);

$produk2 = new Game("Uncharted" , "Mbuh","Sony Comp", 250000,50);

$cetakProduk = new CetakInfoProduk;

$cetakProduk->tambahProduk($produk1);
$cetakProduk->tambahProduk($produk2);

echo $cetakProduk->cetak();