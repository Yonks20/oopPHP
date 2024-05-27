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
        return "$this->judul,$this->penulis, $this->penerbit";
    }

}
// $produk1 = new Produk();
// // Bisa ditimpa
// $produk1->judul = "Naruto";
// var_dump($produk1);

// $produk2 = new Produk();
// $produk2->judul = "Spongebob";
// $produk2->tambahProperty = "Hahahha";
// var_dump($produk2);


$produk1 = new Produk("Naruto", "Hinata", "Sazuke", 100);


// echo "Komik : $produk3->judul, $produk3->penulis, $produk3->penerbit";
// echo "\n";
// echo $produk3->getLabel();
// // Masuk ke methode
// echo "\n";

$produk2 = new Produk("Valorant", "Riot", "Riot Games", 10000);
$produk3 = new Produk("Clash of clans");

echo "Komik : " . $produk1->getLabel();
echo "\n";
echo "Game : " . $produk2->getLabel();
echo "\n";
echo "Game moba : " . $produk3->getLabel();
?>