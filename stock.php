<?php

class Produk
{
    public $nama_barang = "Nama barang";
    public $jenis_barang = "Jenis";
    private $harga_barang = "Harga barang";
    protected $stock = "0";

    public function __construct($nama_barang, $jenis_barang, $harga_barang, $stock)
    {
        $this->nama_barang = $nama_barang;
        $this->jenis_barang = $jenis_barang;
        $this->harga_barang = $harga_barang;
        $this->stock = $stock;
    }

    public function getBarang()
    {
        return "$this->nama_barang";
    }
    public function getJenis()
    {
        return "$this->jenis_barang";
    }
    public function getHarga()
    {
        return "$this->harga_barang";
    }
    public function getStock()
    {
        return "$this->stock";
    }
}

$produk1 = new Produk("Ale-Ale", "Minuman", "15000", "20");

$produk2 = new Produk("Teh Gelas", "Minuman", "14000", "15");

$produk3 = new Produk("Sedap Goreng", "Makanan", "4000", "10");

echo "<hr>";
echo "Toko Abdul";
echo "<br>";
echo "1";
echo "<br>";
echo "Nama Barang : " . $produk2->getBarang();
echo "<br>";
echo "Jenis : " . $produk2->getJenis();
echo "<br>";
echo "Harga : " . $produk2->getHarga();
echo "<br>";
echo "Stock : " . $produk2->getStock();
echo "<br>";
echo "2";
echo "<br>";
echo "Nama Barang : " . $produk3->getBarang();
echo "<br>";
echo "Jenis : " . $produk3->getJenis();
echo "<br>";
echo "Harga : " . $produk3->getHarga();
echo "<br>";
echo "Stock : " . $produk3->getStock();
echo "<hr>";
echo "Toko Algifari";
echo "<br>";
echo "1";
echo "<br>";
echo "Nama Barang : " . $produk1->getBarang();
echo "<br>";
echo "Jenis : " . $produk1->getJenis();
echo "<br>";
echo "Harga : " . $produk1->getHarga();
echo "<br>";
echo "Stock : " . $produk1->getStock();
