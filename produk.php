<?php 

// Jualan Produk
// Komik
// Game

class Produk{
    public $judul = "Judul",
            $penulis = "Penulis",
            $penerbit = "Penerbit",
            $harga = 0 ;
    
    // Method
    public function getLabel(){
        // pakai $this->vataibe; = variable sama yang diatas 
        return "$this->penulis, $this->penerbit";
    }

}

// $produk1 = new Produk();
// // object ->
// $produk1->judul="Naruto";
// var_dump($produk1);

// $produk2 = new Produk();
// $produk2->judul = "Uncharted";
// $produk2->tambahProperty = "UHahaha";
// var_dump($produk2);

$produk3 = new Produk();
$produk3->judul="Naruto";
$produk3->penulis="Mashasi Kisimoto";
$produk3->penerbit="Shoenen Jump";
$produk3->harga=30000;

$produk4 = new Produk();
$produk4 = new Produk();
$produk4->judul="Uncharted";
$produk4->penulis="Neil Duckman";
$produk4->penerbit="Sony Computer";
$produk4->harga=250000;

echo "Komik: ".$produk3->getLabel();
echo "<br>";
echo "Game: ".$produk4->getLabel();




