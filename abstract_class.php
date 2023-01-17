<?php 
use HRTime\PerformanceCounter;

// Jualan Produk
// Komik
// Game

abstract class Produk{
    private $judul,
            $penulis,
            $penerbit,
            $diskon,
            $harga;

    // Constructor, magic method
    public function __construct($judul = "Judul", $penulis = "Penulis", $penerbit = "penerbit", 
                $harga= 0)
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

    public function setJudul($judul){
        $this->judul = $judul;
    }

    public function getJudul(){
        return $this->judul;
    }

    public function setPenulis($penulis){
        $this->penulis = $penulis;
    }

    public function getPenulis(){
        return $this->penulis;
    }

    public function setPenerbit($penerbit){
        $this->penerbit = $penerbit;
    }

    public function getPenerbit(){
        return $this->penerbit;
    }

    public function setDiskon($diskon){
        $this->diskon = $diskon;
    }

    public function getDiskon(){
        return $this->diskon;
    }

    public function setHarga($harga){
        $this->harga= $harga;
    }

    public function getHarga()
    {
        return $this->harga - ($this->harga * $this->diskon/100);
    }

    abstract public function getInfoProduk();

    public  function getInfo()
    {
        $str = "{$this->judul}, {$this->getLabel()}, (Rp.{$this->harga}) ";

        return $str;
    } 

}

class Komik extends Produk{
    public $jmlHalaman;
    public function __construct($judul, $penulis, $penerbit, $harga,$jmlHalaman )
    {
        // parent :: panggil method kelas asal
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->jmlHalaman = $jmlHalaman;
    }


    public function getInfoProduk()
    {
        $str = "Komik : ".parent::getInfo()." {$this->getLabel()}, (Rp.{$this->getHarga() }) - 
        {$this->jmlHalaman} Halaman ";
        return $str;
    }
}

class Game extends Produk{
    public $waktuMain;

    public function __construct($judul = "Judul", $penulis = "Penulis", $penerbit = "penerbit", 
                $harga= 0, $waktuMain = 0)
    {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->waktuMain = $waktuMain;
    }



    public function getInfoProduk()
    {
        $str = "Game : ".parent::getInfo()." {$this->getLabel()}, (Rp.{$this->getHarga()}) - 
        {$this->waktuMain} Jam ";
        return $str;
    }
}



class CetakInfoProduk{
    public $daftarProduk = array();

    public function tambahProduk(Produk $produk){
        $this->daftarProduk[]= $produk;
    }

    // Menerima class produk
    public function cetak(){
        $str = "DAFTAR PRODUK : <br>";

        foreach($this->daftarProduk as $p){
            $str.="- {$p->getInfo()} <br>";
        }
        return $str;
    }
}



$produk1 = new Komik("Naruto", "Mashasi Kisimoto","Shonen Jump", 30000,100);

$produk2 = new Game("Uncharted" , "Mbuh","Sony Comp", 250000,50);

$cetakProduk = new CetakInfoProduk;

$cetakProduk->tambahProduk($produk1);
$cetakProduk->tambahProduk($produk2);

echo $cetakProduk->cetak();


