<?php
//class produk
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

$produk4 = new Produk("Seperior", "MIE","5000","5");

$produk5 = new produk("Lays", "SNACK", "6000","15");

$produk6 = new Produk("Gudang Garam", "Rokok", "20000", 10);

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
echo "4";
echo "<br>";
echo "Nama Barang : " . $produk4->getBarang();
echo "<br>";
echo "Jenis : " . $produk4->getJenis();
echo "<br>";
echo "Harga : " . $produk4->getHarga();
echo "<br>";
echo "Stock : " . $produk4->getStock();
echo "4";
echo "<br>";
echo "Nama Barang : " . $produk5->getBarang();
echo "<br>";
echo "Jenis : " . $produk5->getJenis();
echo "<br>";
echo "Harga : " . $produk5->getHarga();
echo "<br>";
echo "Stock : " . $produk5->getStock();
echo "<br>";
echo "Nama Barang : " . $produk6->getBarang();
echo "<br>";
echo "Jenis : " . $produk6->getJenis();
echo "<br>";
echo "Harga : " . $produk6->getHarga();
echo "<br>";
echo "Stock : " . $produk6->getStock();
echo "<br>";
