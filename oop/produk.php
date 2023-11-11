<?php 

class Produk {
    public $judul = "naruto",
            $penulis,
            $penerbit,
            $harga;

    public function getLabel() {
        return "Komik: $this->judul, penulis: $this->penulis";
    }
}

// $produk1 = new Produk();
// $produk1->penulis = "Mashashi";
// var_dump($produk1);

// echo "</br>";

// $produk2 = new Produk();
// $produk2->tambahProperty = "haha";
// var_dump($produk2);

$produk3 = new Produk();
$produk3->judul = "Naruto";
$produk3->penulis = "Mashasi Kishimoto";
$produk3->penerbit = "Shonen Jump";
$produk3->harga = 20000;

$produk4 = new Produk();
$produk4->judul = "Uncharted";
$produk4->penulis = "Benjamin";
$produk4->penerbit = "Ubisoft";
$produk4->harga = 250000;


echo $produk3->getLabel();
echo "<br>";
echo $produk4->getLabel();