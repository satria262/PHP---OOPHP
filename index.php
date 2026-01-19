<?php

class Produk {
    public 
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

    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }
}

class CetakanInfoProduk {
    public function print(Produk $x) {
        $text = "{$x->judul} | {$x->penulis}, diterbitkan oleh {$x->penerbit} mulai (Rp. {$x->harga })"; 
        return $text;
    }
}
// judul, penulis, penerbit, harga
$produk1 = new Produk("test_judul", "test_penulis", "test_penerbit", "test_harga");

$infoproduk1 = new CetakanInfoProduk(); 
echo $infoproduk1->print($produk1);
