<?php 

// Jualan produk
// Game
// Komik

// Sebuah class yang namanya produk yang akan kita kelola nantinya

class Produk{
    public $judul, 
          $penulis, 
          $penerbit,
          $harga,
          $jmlHalaman,
          $waktuMain,
          $tipe;

    public function __construct($tipe, $judul="Judul", $penulis="Penulis", $penerbit="Penerbit", $harga="Harga", $jmlHalaman=0, $waktuMain=0){
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlHalaman = $jmlHalaman;
        $this->waktuMain = $waktuMain;
        $this->tipe = $tipe;
    }
    public function getLabel(){
        return "$this->penulis, $this->penerbit";
    }
    public function getInfoLengkap(){
        $str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
    
        if($this->tipe == "Komik"){
            $str .= " -{$this->jmlHalaman} Halaman.";
        }else if($this->tipe == "Game"){
            $str .= " ~ {$this->waktuMain} Jam.";
        }
        return $str;
    }
}

class CetakInfoProduk {
    public function cetak($produk){
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp.{$produk->harga})";

        return $str;
    }
}

$produk1 = new Produk("Komik","Naruto", "Hinata", "Sazuke", 30000, 100, 0);
$produk2 = new Produk("Game", "Valorant", "Riot", "Riot Games", 10000, 0, 50);

echo $produk1->getInfoLengkap();
echo "<br>";
echo $produk2->getInfoLengkap();
?>