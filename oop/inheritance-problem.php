<?php

class Produk {
    public $judul,
            $penulis,
            $penerbit,
            $harga,
            $jmlHalaman,
            $waktuMain,
            $tipe;

    public function __construct($judul, $penulis, $penerbit, $harga, $jmlHalaman, $waktuMain, $tipe)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlHalaman = $jmlHalaman;
        $this->waktuMain = $waktuMain;
        $this->tipe = $tipe;
    }

    public function getLabel() {
        return "$this->judul | $this->penulis, $this->penerbit";
    }

    public function getInfoLengkap() {
        $str =  "{$this->tipe}: {$this->judul} | {$this->penulis}, {$this->penerbit} (Rp. {$this->harga})";

        if($this->tipe == 'Komik') {
            $str .= " - {$this->jmlHalaman} Halaman";
        } else if ($this->tipe = 'Game') {
            $str .= " ~ {$this->waktuMain} Jam";
        }
        
        return $str;
    }

   
}

class CetakInfoProduk {
    public function cetak(Produk $produk) {
        $str = "{$produk->judul} | {$produk->getLabel()} | (Rp. {$produk->harga})";
        return $str;
    }
}


$produk1 = new Produk("Naruto", "Mashasi Kishimoto", "Shonen Jump", 2000000, 10, 20, "Komik");
$produk2 = new Produk("Uncharted", "Benjamin", "Ubisoft", 2500000, 0, 50, "Game");

echo $produk1->getInfoLengkap();
echo "<br>";
echo $produk2->getInfoLengkap();
