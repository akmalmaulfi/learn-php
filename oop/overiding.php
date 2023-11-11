<?php

class Produk {
    public $judul,
            $penulis,
            $penerbit,
            $harga;

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

   
}

class CetakInfoProduk {
    public function cetak(Produk $produk) {
        $str = "{$produk->judul} | {$produk->getLabel()} | (Rp. {$produk->harga})";
        return $str;
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
        $str =  "Komik: {$this->judul} | " . parent::getInfoLengkap() . " - {$this->jmlHalaman} Halaman";

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
        $str =  "Game: {$this->judul} | " . parent::getInfoLengkap() . " ~ {$this->waktuMain} Jam";
        
        return $str;
    }
}


$produk1 = new Komik("Naruto", "Mashasi Kishimoto", "Shonen Jump", 2000000, 100);
$produk2 = new Game("Uncharted", "Benjamin", "Ubisoft", 2500000, 50);

echo $produk1->getInfoLengkap();
echo "<br>";
echo $produk2->getInfoLengkap();
