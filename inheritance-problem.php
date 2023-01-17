<?php 

// Jualan Produk
// Komik
// Game

class Produk{
    public  $judul,
            $penulis,
            $penerbit,
            $harga ,
            $jmlHalaman,
            $waktuMain,
            $tipe;

    // Constructor, magic method
    public function __construct($judul, $penulis, $penerbit, $harga, $jmlHalaman, $waktuMain, $tipe)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlHalaman = $jmlHalaman;
        $this->waktuMain = $waktuMain;
        $this->tipe= $tipe;
    }        
    
    // Method
    public function getLabel()
    {
        // pakai $this->vataibe; = variable sama yang diatas 
        return "$this->penulis, $this->penerbit";
    }

    public function getInfoLengkap(){
        $str = "{$this->tipe} | {$this->judul}, {$this->getLabel()}, (Rp.{$this->harga}) ";
    
        if($this->tipe == "komik"){
            $str.="- {$this->tipe} Halaman";
        }   else if($this->tipe == "game"){
            $str.="- {$this->tipe} Waktu Main";

        }

        return $str;
    } 

}

class CetakInfoProduk{
    // Menerima class produk
    public function cetak(Produk $produk){
        $str = "{$produk->judul} | {$produk->getLabel()}{$produk->harga}";
        return $str;
    }
}



$produk1 = new Produk("Naruto", "Mashasi Kisimoto","Shonen Jump", 30000,100, 0, "Komik");

$produk2 = new Produk("Uncharted" , "Mbuh","Sony Comp", 250000,0, 50, "game");

echo $produk1->getInfoLengkap();

echo $produk1->getInfoLengkap();




