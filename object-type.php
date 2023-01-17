<?php 

// Jualan Produk
// Komik
// Game

class Produk{
    public $judul = "Judul",
            $penulis = "Penulis",
            $penerbit = "Penerbit",
            $harga = 0 ;

    // Constructor, magic method
    public function __construct($judul, $penulis, $penerbit,$harga)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }        
    
    // Method
    public function getLabel(){
        // pakai $this->vataibe; = variable sama yang diatas 
        return "$this->penulis, $this->penerbit";
    }

}

class CetakInfoProduk{
    // Menerima class produk
    public function cetak(Produk $produk){
        $str = "{$produk->judul} | {$produk->getLabel()}{$produk->harga}";
        return $str;
    }
}



$produk1 = new Produk("Naruto", "Mashasi Kisimoto","Shonen Jump", 30000);

$produk2 = new Produk("Uncharted" , "Mbuh","Sony Comp", 250000);

echo "Komik: ".$produk1->getLabel();
echo "<br>";
echo "Game: ".$produk2->getLabel();
echo "<br>";

// inisiasi class
$infoProduk1 = new CetakInfoProduk();
// construc method
echo $infoProduk1->cetak($produk1);




