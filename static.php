<?php
// class ContohStatic {
//     public static $int = 1;

//     public static function halo() {
//         return "halo " . self::$int . " kali" ;
//     }
// }
// echo ContohStatic::$int;

class Contoh {
    public static $int = 1;
    
    public function halo() {
        return "Halo " . self::$int++ . " kali" ;
    }
}
$obj = new Contoh;
echo $obj->halo()."\n";
echo $obj->halo()."\n";
echo $obj->halo()."\n";

$obj2 = new Contoh;
echo $obj2->halo()."\n";
echo $obj2->halo()."\n";
echo $obj2->halo()."\n";
?>