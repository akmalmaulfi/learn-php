<?php 

class Game extends Produk  implements GetInfo{
    public $waktuMain;

    public function __construct($judul, $penulis, $penerbit, $harga, $waktuMain)
    {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->waktuMain = $waktuMain;
    }

    public function getInfo()
    {
        $str =  "{$this->penulis}, {$this->penerbit} (Rp. {$this->harga})";
        return $str;
    }

    public function getInfoProduk()
    {
        $str =  "Game: {$this->getJudul()} | " . $this->getInfo() . " ~ {$this->waktuMain} Jam";
        
        return $str;
    }
}
