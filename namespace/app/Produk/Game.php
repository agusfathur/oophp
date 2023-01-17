<?php

class Game extends Produk implements InfoProduk{
    public $waktuMain;

    public function __construct($judul = "Judul", $penulis = "Penulis", $penerbit = "penerbit", 
                $harga= 0, $waktuMain = 0)
    {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->waktuMain = $waktuMain;
    }

    public  function getInfo() 
    {
        $str = "{$this->judul}, {$this->getLabel()}, (Rp.{$this->harga}) ";

        return $str;
    }

    public function getInfoProduk()
    {
        $str = "Game : ".parent::getInfo()." {$this->getLabel()}, (Rp.{$this->getHarga()}) - 
        {$this->waktuMain} Jam ";
        return $str;
    }
}