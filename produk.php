<?php 

// Jualan produk
// Game
// Komik

// Sebuah class yang namanya produk yang akan kita kelola nantinya

class Produk{
    public$judul = "Judul", 
          $penulis = "Penulis", 
          $penerbit = "Penerbit",
          $harga = 0;


    public function getLabel(){
        return "$this->penulis, $this->penerbit";
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


$produk3 = new Produk();
$produk3->judul = "Doraemon";
$produk3->penulis = "Nobita";
$produk3->penerbit = "Dora";
$produk3->harga = 10000;

echo "Komik : $produk3->judul, $produk3->penulis, $produk3->penerbit";
echo "\n";
echo $produk3->getLabel();
// Masuk ke methode
echo "\n";

$produk4 = new Produk();
$produk4->judul="Valorant";
$produk4->penulis="Riot";
$produk4->penerbit="Riot Games";
$produk4->harga=10000;

echo "Komik : " . $produk3->getLabel();
echo "\n";
echo "Game : " . $produk4->getLabel();

?>