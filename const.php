<?php
// dalam OOP, define tidak bisa digunakan didalam class karena sifatnya global
define('NAMA', 'Satria Aditama');
// sedangkan const bisa digunakan dalam class
const STUDIO = 'BETA DEV'; 

class Coba {
    const NAMA = 'Kikuk';
}

echo ;

echo Coba::NAMA;
?>