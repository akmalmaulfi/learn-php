<?php

class Produk {
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

    public function getInfoLengkap() {
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

    public function getInfoLengkap()
    {
        $str =  "Komik: {$this->getJudul()} | " . parent::getInfoLengkap() . " - {$this->jmlHalaman} Halaman";

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

    public function getInfoLengkap()
    {
        $str =  "Game: {$this->getJudul()} | " . parent::getInfoLengkap() . " ~ {$this->waktuMain} Jam";
        
        return $str;
    }
}


$produk1 = new Komik("Naruto", "Mashasi Kishimoto", "Shonen Jump", 200000, 100);
$produk2 = new Game("Uncharted", "Benjamin", "Ubisoft", 2500000, 50);

echo $produk1->getInfoLengkap();
echo "<br>";
echo $produk2->getInfoLengkap();
echo "<hr>";

$produk1->setDiskon(50);
echo $produk1->getHarga();

echo "<hr>";
echo $produk1->getHarga();
