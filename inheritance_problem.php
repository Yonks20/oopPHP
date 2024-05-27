<?php 

// Jualan produk
// Game
// Komik

// Sebuah class yang namanya produk yang akan kita kelola nantinya

class Produk{
    public$judul, 
          $penulis, 
          $penerbit,
          $harga;

    public function __construct($judul="Judul", $penulis="Penulis", $penerbit="Penerbit", $harga="Harga"){
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }
    public function getLabel(){
        return "$this->penulis, $this->penerbit";
    }

}

class CetakInfoProduk {
    public function cetak($produk){
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp.{$produk->harga})";

        return $str;
    }
}

$produk1 = new Produk("Naruto", "Hinata", "Sazuke", 100);
$produk2 = new Produk("Valorant", "Riot", "Riot Games", 10000);

// echo "Komik : " . $produk1->getLabel();
// echo "\n";
// echo "Game : " . $produk2->getLabel();
// echo "\n";
// $infoProduk1 = new CetakInfoProduk;
// echo $infoProduk1->cetak($produk1);

// komik : Naruto | Hinata, Sazuke (Rp. 100) = 100 Halaman.
// komik : Valorant | Riot, Riot Games (Rp. 10000) = 10 Jam. Halaman.




?>