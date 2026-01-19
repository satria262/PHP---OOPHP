<?php

class Produk {
    public 
    $judul,
    $penulis, 
    $penerbit, 
    $harga,
    $jmlHalaman,
    $waktuTamat,
    $tipe;

    public function __construct($judul = "Belum diisi", $penulis = "Belum diisi", $penerbit = "Belum diisi", $harga = 0, $jmlHalaman = "Belum diisi", $waktuTamat = "Belum diisi", $tipe = "Tidak Diketahui") {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlHalaman = $jmlHalaman;
        $this->waktuTamat = $waktuTamat;
        $this->tipe = $tipe;
    }

    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }
}

class CetakanInfoProduk {
    public function print(Produk $x) {
        $text = "{$x->judul} | {$x->penulis}, diterbitkan oleh {$x->penerbit} mulai (Rp. {$x->harga })";
        if ($x->tipe == "Buku" | $x->tipe == "BUKU" | $x->tipe == "buku") {
            $text .= " - {$x->jmlHalaman} Halaman";
        } else {
            $text .= " ~ {$x->waktuTamat} Jam";
        }
        return $text;
    }
}
// judul, penulis, penerbit, harga, hal, jam, tipe
$produk1 = new Produk("test_judul", "test_penulis", "test_penerbit", "test_harga", 100, 0, "buku");

$infoproduk1 = new CetakanInfoProduk(); 
echo $infoproduk1->print($produk1);
