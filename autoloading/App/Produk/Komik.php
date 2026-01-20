<?php

class Komik extends Produk implements InfoProduk{
    public $jmlHalaman;

    public function __construct($judul = "Belum diisi", $penulis = "Belum diisi", $penerbit = "Belum diisi", $harga = 0, $jmlHalaman = "Belum diisi") {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->jmlHalaman = $jmlHalaman; 
    }

    public function getInfo() {
        $text = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
        return $text;
    }

    // penting, fungsi dibawah adalah implementasi dari fungsi abstrak (punyanya parent (obvious    ))
    public function getInfoProduk() {
        $text = "Komik : " . $this->getInfo() . " - {$this->jmlHalaman} Halaman.";
        return $text;
    }
}
