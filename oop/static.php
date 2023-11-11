<?php 

class contohStatic {
    public static $angka = 1;

    public static function halo() {
        return "halo " . self::$angka++ . "kali <br>";
    }
}

echo "<br>";
// echo contohStatic::halo();
echo "<br>";

class Contoh {
    public static $angka = 1;

    public function halo() {
        return "Halo " . self::$angka++ . "</br>";
    }
    

}


$obj = new Contoh();
echo $obj->halo();
echo $obj->halo();
echo $obj->halo();
echo "<hr>";

$obj2 = new Contoh();
echo $obj2->halo();
echo $obj2->halo();
echo $obj2->halo();