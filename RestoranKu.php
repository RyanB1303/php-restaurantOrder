<?php


class RestoranKu
{

  protected $makanan;
  protected $deskripsi;

  public function __construct($makanan, $deskripsi = '')
  {
    $this->makanan = $makanan;
    $this->deskripsi = $deskripsi;
  }

  public function pesan(RestoranInterface $pesanan)
  {
    echo "Pesanan Diterima!! \n";
    $pesanan->telepon();
    $pesanan->masak($this->makanan);
    $pesanan->deskripsi($this->deskripsi);
  }
}
