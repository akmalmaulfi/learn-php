<?php

class Produk {
    public $judul,
            $penulis,
            $penerbit,
            $harga,
            $jmlHalaman,
            $waktuMain;

    public function __construct($judul, $penulis, $penerbit, $harga, $jmlHalaman, $waktuMain)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlHalaman = $jmlHalaman;
        $this->waktuMain = $waktuMain;
    }

    public function getLabel() {
        return "$this->judul | $this->penulis, $this->penerbit";
    }

    public function getInfoLengkap() {
        $str =  "{$this->tipe}: {$this->judul} | {$this->penulis}, {$this->penerbit} (Rp. {$this->harga})";
        return $str;
    }

   
}

class CetakInfoProduk {
    public function cetak(Produk $produk) {
        $str = "{$produk->judul} | {$produk->getLabel()} | (Rp. {$produk->harga})";
        return $str;
    }
}

class Komik extends Produk {
    public function getInfoLengkap()
    {
        $str =  "Komik: {$this->judul} | {$this->penulis}, {$this->penerbit} (Rp. {$this->harga}) - {$this->jmlHalaman} Halaman";

        return $str;
    }
}

class Game extends Produk {
    public function getInfoLengkap()
    {
        $str =  "Game: {$this->judul} | {$this->penulis}, {$this->penerbit} (Rp. {$this->harga}) ~ {$this->waktuMain} Jam";
        
        return $str;
    }
}


$produk1 = new Komik("Naruto", "Mashasi Kishimoto", "Shonen Jump", 2000000, 10, 20, "Komik");
$produk2 = new Game("Uncharted", "Benjamin", "Ubisoft", 2500000, 0, 50, "Game");

echo $produk1->getInfoLengkap();
echo "<br>";
echo $produk2->getInfoLengkap();
