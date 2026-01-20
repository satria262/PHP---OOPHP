<?php

interface InfoProduk {
    public function getInfoProduk();
}

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
class CetakanInfoProduk {
    public $daftarproduk = array();

    public function tambahProduk(Produk $produk) {
        $this->daftarproduk[] = $produk;
    }

    public function print() {
    $text = "Daftar Produk: \n";
    foreach($this->daftarproduk as $p) {
        $text .= "- {$p->getInfoProduk()} \n";
    }
    return $text;
    }
}



// judul, penulis, penerbit, harga, hal, jam, tipep
$produk1 = new Komik("test_judul", "test_penulis", "test_penerbit", "test_harga", 100, "Komik");
$produk2 = new Game("test_game", "test_dev", "test_launcher", "test_harga", 55, "game");

$cetakProduk = new CetakanInfoProduk();
$cetakProduk->tambahProduk($produk1);
$cetakProduk->tambahProduk($produk2);

echo $cetakProduk->print();