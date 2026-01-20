<?php

class Produk {
    private 
    $judul,
    $penulis, 
    $penerbit;
    protected 
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

    public function getInfoProduk() {
        $text = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
        return $text;
    }
}

class Komik extends Produk {
    public $jmlHalaman;

    public function __construct($judul = "Belum diisi", $penulis = "Belum diisi", $penerbit = "Belum diisi", $harga = 0, $jmlHalaman = "Belum diisi") {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->jmlHalaman = $jmlHalaman; 
    }

    public function getInfoProduk() {
        $text = "Komik : " . parent::getInfoProduk() . " - {$this->jmlHalaman} Halaman.";
        return $text;
    }
}

class Game extends Produk {
    public $waktuTamat;

    public function __construct($judul = "Belum diisi", $penulis = "Belum diisi", $penerbit = "Belum diisi", $harga = 0, $waktuTamat = "Belum diisi") {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->waktuTamat = $waktuTamat;
    }

    public function getInfoProduk() {
        $text = "Game : " . parent::getInfoProduk() . " ~ {$this->waktuTamat } Jam.";
        return $text;                       
    }
}
class CetakanInfoProduk {
    public function print(Produk $x) {
        $text = "{$x->judul} | {$x->penulis}, diterbitkan oleh {$x->penerbit} mulai (Rp. {$x->harga })";
        return $text;
    }
}



// judul, penulis, penerbit, harga, hal, jam, tipe
$produk1 = new Komik("test_judul", "test_penulis", "test_penerbit", "test_harga", 100, "Komik");
$produk2 = new Game("test_game", "test_dev", "test_launcher", "test_harga", 55, "game");
