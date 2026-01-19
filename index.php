<?php

class Produk {
    public 
    $judul,
    $penulis, 
    $penerbit, 
    $harga,
    $jmlHalaman,
    $waktuTamat;

    public function __construct($judul = "Belum diisi", $penulis = "Belum diisi", $penerbit = "Belum diisi", $harga = 0, $jmlHalaman = "Belum diisi", $waktuTamat = "Belum diisi") {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlHalaman = $jmlHalaman;
        $this->waktuTamat = $waktuTamat;
    }

    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }

    public function getInfoProduk() {
        $text = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
        return $text;
    }
}

class Komik extends Produk {
    public function getInfoKomik() {
        $text = "Komik : {$this->getInfoProduk()} - {$this->jmlHalaman} Halaman.";
        return $text;
    }
}

class Game extends Produk {
    public function getInfoGame() {
        $text = "Game : {$this->getInfoProduk()} ~ {$this->waktuTamat } Jam.";
        return $text;
    }
}
// class CetakanInfoProduk {
//     public function print(Produk $x) {
//         $text = "{$x->judul} | {$x->penulis}, diterbitkan oleh {$x->penerbit} mulai (Rp. {$x->harga })";
//     }
// }



// judul, penulis, penerbit, harga, hal, jam, tipe
$produk2 = new Game("test_game", "test_dev", "test_launcher", "test_harga", 0, 55, "game");
$produk1 = new Komik("test_judul", "test_penulis", "test_penerbit", "test_harga", 100, 55, "Komik");

echo $produk1->getInfoKomik();
echo "<br>";
echo $produk2->getInfoGame();