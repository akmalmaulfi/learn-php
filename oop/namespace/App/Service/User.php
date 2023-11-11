<?php 

namespace App\Service;

class User{
    public function __construct()
    {
        $class = __CLASS__;
        $class = explode('\\', $class);
        $class = end($class);
        echo "ini adalah class " . $class . " dari folder Service";
    }
}