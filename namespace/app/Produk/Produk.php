<?php

abstract class Produk{
    protected $judul,
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

    abstract public function getInfo(); 

}