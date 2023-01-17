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
    public function __construct($judul, $penulis, $penerbit, $harga)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }        
    
    // Method
    public function getLabel()
    {
        // pakai $this->vataibe; = variable sama yang diatas 
        return "$this->penulis, $this->penerbit";
    }

    public function getInfoProduk(){
        $str = "{$this->tipe} | {$this->judul}, {$this->getLabel()}, (Rp.{$this->harga}) ";

        return $str;
    } 

}

class Komik extends Produk{
    public function getInfoProduk()
    {
        $str = "{$this->tipe} | {$this->judul}, {$this->getLabel()}, (Rp.{$this->harga}) - 
        {$this->jmlHalaman} - Halaman ";
        return $str;
    }
}

class Game extends Produk{
    public function getInfoProduk()
    {
        $str = "{$this->tipe} | {$this->judul}, {$this->getLabel()}, (Rp.{$this->harga}) - 
        {$this->waktuMain} - Jam ";
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



$produk1 = new Komik("Naruto", "Mashasi Kisimoto","Shonen Jump", 30000,100);

$produk2 = new Game("Uncharted" , "Mbuh","Sony Comp", 250000,50);

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();




