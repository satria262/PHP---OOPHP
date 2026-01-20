<?php

abstract class Produk {
    protected 
    $judul,
    $penulis, 
    $penerbit,
    $harga;

    public function __construct($judul = "Belum diisi", $penulis = "Belum diisi", $penerbit = "Belum diisi", $harga = 0) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    // yang ini getter
    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }
    // yang ini setter
    public function setJudul($judulbaru) {
        if (!is_string($judulbaru)) {
            throw new Exception("New title can't be filled with any integer");
        } else {
        $this->judul = $judulbaru;
        }
    }

    abstract public function getInfo();
}