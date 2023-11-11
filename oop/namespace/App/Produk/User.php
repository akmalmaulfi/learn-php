<?php 

namespace App\Produk;

class User {
    public function __construct()
    {
        $class = __CLASS__;
        $class = explode('\\', $class);
        $class = $class[2];
        echo "ini adalah class ". $class . " dari folder produk";
    }
}