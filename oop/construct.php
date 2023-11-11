<?php

class Produk {
    public $judul = "naruto",
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
        return "Komik: $this->judul, penulis: $this->penulis";
    }
}

class CetakInfoProduk {
    public function cetak(Produk $produk) {
        $str = "{$produk->judul} | {$produk->getLabel()} | (Rp. {$produk->harga})";
        return $str;
    }
}


$produk1 = new Produk("Naruto", "Mashasi Kishimoto", "Shonen Jump", 2000000);
$produk2 = new Produk("Uncharted", "Benjamin", "Ubisoft", 2500000);

var_dump($produk1);
// $cetakProduk = new CetakInfoProduk();
// echo $cetakProduk->cetak($produk1);
// echo "<br>";
// echo $cetakProduk->cetak($produk2);
// var_dump($produk1);
// echo $produk4->getLabel();