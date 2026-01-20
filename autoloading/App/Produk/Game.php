<?php

class Game extends Produk implements InfoProduk{
    public $waktuTamat;

    public function __construct($judul = "Belum diisi", $penulis = "Belum diisi", $penerbit = "Belum diisi", $harga = 0, $waktuTamat = "Belum diisi") {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->waktuTamat = $waktuTamat;
    }

    public function getInfo() {
        $text = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
        return $text;
    }

    // penting, fungsi dibawah adalah implementasi dari fungsi abstrak (punyanya parent (obvious    ))
    public function getInfoProduk() {
        $text = "Game : " . $this->getInfo() . " ~ {$this->waktuTamat } Jam.";
        return $text;                       
    }
}