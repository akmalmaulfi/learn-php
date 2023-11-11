<?php 
class Komik extends Produk implements GetInfo {
    public $jmlHalaman;

    public function __construct($judul, $penulis, $penerbit, $harga, $jmlHalaman)
    {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->jmlHalaman = $jmlHalaman;
    }

    public function getInfo()
    {
        $str =  "{$this->penulis}, {$this->penerbit} (Rp. {$this->harga})";
        return $str;
    }

    public function getInfoProduk()
    {
        $str =  "Komik: {$this->getJudul()} | " . $this->getInfo() . " - {$this->jmlHalaman} Halaman";

        return $str;
    }
 
}