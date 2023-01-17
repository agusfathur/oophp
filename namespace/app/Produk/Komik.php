<?php
class Komik extends Produk implements InfoProduk{
    public $jmlHalaman;
    public function __construct($judul, $penulis, $penerbit, $harga,$jmlHalaman )
    {
        // parent :: panggil method kelas asal
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->jmlHalaman = $jmlHalaman;
    }

    public  function getInfo() 
    {
        $str = "{$this->judul}, {$this->getLabel()}, (Rp.{$this->harga}) ";

        return $str;
    }

    public function getInfoProduk()
    {
        $str = "Komik : ".parent::getInfo()." {$this->getLabel()}, (Rp.{$this->getHarga() }) - 
        {$this->jmlHalaman} Halaman ";
        return $str;
    }
}