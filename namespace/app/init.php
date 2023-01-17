<?php

// require_once 'Produk/InfoProduk.php';
// require_once 'Produk/Produk.php';
// require_once 'Produk/Komik.php';
// require_once 'Produk/Game.php';
// require_once 'Produk/CetakInfoProduk.php';
// require_once 'Produk/User.php';

// require_once 'Service/User.php';
    
// Autoload semua file dalam folder
spl_autoload_register(function($class){
    $class = explode('\\', $class);
    $class = end($class);
    // dalam file Produk, nama deoan class . php;
    require_once  __DIR__ . '/Produk/'.$class.'.php';
});

spl_autoload_register(function($class){
    $class = explode('\\', $class);
    $class = end($class);
    // dalam file Produk, nama deoan class . php;
    require_once  __DIR__ . '/Service/'.$class.'.php';
});