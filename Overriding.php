<?php 

// Jualan produk
// Game
// Komik

// Sebuah class yang namanya produk yang akan kita kelola nantinya

class Produk{
    public $judul, 
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
    public function getInfoProduk(){
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";

        return $str;
    }
}

class Komik extends Produk{
    public $jmlHalaman;

    public function __construct($judul="Judul", $penulis="Penulis", $penerbit="Penerbit", $harga=0 ,$jmlHalaman = 0)
    {
        parent::__construct($judul,$penulis,$penerbit,$harga);
        $this->jmlHalaman = $jmlHalaman;
    }
    public function getInfoProduk()
    {
        $str = "Komik: ".parent::getInfoProduk()." - {$this->jmlHalaman} Halaman";
        return $str;
    }
}

class Game extends Produk{

    public $waktuMain;

    public function __construct($judul="Judul", $penulis="Penulis", $penerbit="Penerbit", $harga=0 ,$waktuMain=0)
        {
    parent::__construct($judul,$penulis,$penerbit,$harga);
    $this->waktuMain = $waktuMain;

    }

    public function getInfoProduk()
    {
        $str = "Game: ".parent::getInfoProduk()." - {$this->waktuMain} Jam";
        return $str;
//parent digunakan untuk mengambil method
    }
}

class CetakInfoProduk {
    public function cetak($produk){
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp.{$produk->harga})";

        return $str;
    }
}

$produk1 = new Komik("Naruto", "Hinata", "Sazuke", 390000, 100);
$produk2 = new Game("Valorant", "Riot", "Riot Games", 10000, 50);

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
?>