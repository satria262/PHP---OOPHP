<?php
require_once 'App/init.php';


// judul, penulis, penerbit, harga, hal, jam, tipep
$produk1 = new Komik("test_judul", "test_penulis", "test_penerbit", "test_harga", 100, "Komik");
$produk2 = new Game("test_game", "test_dev", "test_launcher", "test_harga", 55, "game");

$cetakProduk = new CetakanInfoProduk();
$cetakProduk->tambahProduk($produk1);
$cetakProduk->tambahProduk($produk2);

echo $cetakProduk->print();