<?php

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