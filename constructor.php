<?php 
// pembuatan class
class Produk {
    // property
    public $nama, $size, $harga, $vendor, $loc, $kategori;

    // constructor
    public function __construct($nama = "Nama", $size = "Ukuran", $harga = "0", $vendor = "null", $loc = "null", $kategori = "Kategori") {
        $this->nama = $nama;
        $this->size = $size;
        $this->harga = $harga;
        $this->vendor = $vendor;
        $this->loc = $loc;
        $this->kategori = $kategori;
    }

    // method
    public function TampilVendor() {
        return "$this->vendor, $this->loc";
    }
}

// pembuatan instance dari class Produk (objek)
$produk1 = new Produk("Linen Shirt Relaxed" ,"L", "Rp. 145.000", "Growth.csl", "Bali", "Shirt");

echo $produk1->TampilVendor();




?>