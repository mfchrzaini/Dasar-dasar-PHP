<?php 
// pembuatan class
class Produk {
    // property
    public $nama, $kategori, $size, $harga, $vendor, $loc;

    // method
    public function TampilVendor() {
        return "$this->vendor, $this->loc";
    }
}

// pembuatan instance dari class Produk (objek)
$produk1 = new Produk("Linen Shirt Relaxed", "Shirt","L", "Rp. 145.000", "Growth.csl", "Bali");

echo $produk1->TampilVendor()




?>