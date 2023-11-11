<?php

abstract class Produk {
    private $judul,
            $penulis,
            $penerbit,
            $harga,
            $diskon = 0;

    public function __construct($judul, $penulis, $penerbit, $harga)
    {

        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function getLabel() {
        return "$this->judul | $this->penulis, $this->penerbit";
    }

    abstract public function getInfoProduk();

    public function getInfo() {
        $str =  "{$this->penulis}, {$this->penerbit} (Rp. {$this->harga})";
        return $str;
    }

    public function setDiskon($diskon) {
        $this->diskon = $diskon;
    }

    public function setHarga($harga) {
        return $this->harga = $harga;
    }

    public function getHarga() {
        return $this->harga - ($this->harga * $this->diskon/100);
    }

    public function setJudul($judul) {
        $this->judul = $judul;
    }

    public function getJudul() {
        return $this->judul;
    }

    public function setPenulis($penulis) {
        return $this->penulis = $penulis;
    }

    public function getPenulis() {
        return $this->penulis;
    }

    public function setPenerbit($penerbit) {
        return $this->penerbit = $penerbit;
    }

    public function getPenerbit() {
        return $this->penerbit;
    }
   
}

class Komik extends Produk {
    public $jmlHalaman;

    public function __construct($judul, $penulis, $penerbit, $harga, $jmlHalaman)
    {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->jmlHalaman = $jmlHalaman;
    }

    public function getInfoProduk()
    {
        $str =  "Komik: {$this->getJudul()} | " . $this->getInfo() . " - {$this->jmlHalaman} Halaman";

        return $str;
    }
 
}

class Game extends Produk {
    public $waktuMain;

    public function __construct($judul, $penulis, $penerbit, $harga, $waktuMain)
    {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->waktuMain = $waktuMain;
    }

    public function getInfoProduk()
    {
        $str =  "Game: {$this->getJudul()} | " . $this->getInfo() . " ~ {$this->waktuMain} Jam";
        
        return $str;
    }
}

class CetakInfoProduk {
    public $daftarProduk = [];

    public function tambahProduk(Produk $produk) {
        $this->daftarProduk[] = $produk;
    }

    public function cetak() {
        $str = "DAFTAR PRODUK <br>";

        foreach($this->daftarProduk as $p) {
           $str .= "- {$p->getInfoProduk()} <br>";
        }

        return $str;
    }
}

$produk1 = new Komik("Naruto", "Mashasi Kishimoto", "Shonen Jump", 200000, 100);
$produk2 = new Game("Uncharted", "Benjamin", "Ubisoft", 2500000, 50);
$produk3 = new Game("Spiderman", "Konflicet", "RG", 2500000, 50);

$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk($produk1);
$cetakProduk->tambahProduk($produk2);
$cetakProduk->tambahProduk($produk3);
echo $cetakProduk->cetak();
