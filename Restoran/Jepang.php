<?php


class Jepang implements RestoranInterface
{

  public function telepon()
  {
    echo "Menelepon Restoran Jepang \n";
  }

  public function masak($makanan)
  {
    echo "Memasak $makanan \n";
  }
  public function deskripsi($deskripsi)
  {
    echo "Tambahan Diterima :  $deskripsi\n";
  }
}
