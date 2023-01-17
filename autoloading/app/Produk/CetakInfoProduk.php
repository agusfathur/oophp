<?php

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