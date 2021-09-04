<?php

spl_autoload_register(function ($className) {
  include $className . '.php';
});
require_once('Restoran/Chinese.php');
require_once('Restoran/Jepang.php');

$request = [
  'restoran' => 'Jepang',
  'makanan' => 'Kare',
  'deskripsi' => 'Tidak Pedas'
];

$restoran = new RestoranKu($request['makanan'], $request['deskripsi']);
$restoran->pesan(new $request['restoran']);
