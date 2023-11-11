<?php 
require_once 'App/init.php';

// $produk1 = new Komik("Naruto", "Mashasi Kishimoto", "Shonen Jump", 200000, 100);
// $produk2 = new Game("Uncharted", "Benjamin", "Ubisoft", 2500000, 50);
// $produk3 = new Game("Spiderman", "Konflicet", "RG", 2500000, 50);

// $cetakProduk = new CetakInfoProduk();
// $cetakProduk->tambahProduk($produk1);
// $cetakProduk->tambahProduk($produk2);
// $cetakProduk->tambahProduk($produk3);
// echo $cetakProduk->cetak();

// echo "<hr>";


use App\Produk\User as ProdukUser;
use App\Service\User as ServiceUser;

new ProdukUser();
echo "<br>";
new ServiceUser();