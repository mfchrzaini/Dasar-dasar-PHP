<?php
//memberikan class kedalam parameter agar argumen yang diberikan harus berupa objek dari class tersebut. Penerapan pada class CetakInfoLengkap

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
        return "Vendor : {$this->vendor} | Lokasi Vendor : {$this->loc}";
    }

}

// Objek sebagai tipe parameter, sehingga argumen yang diberikan harus berupa objek, dalam contoh disini yaitu Produk
class CetakInfolengkap {
    public function InfoProduk(Produk $Produk) {
        $str = "Nama Produk : {$Produk->nama} | Size : {$Produk->size} | Harga : {$Produk->harga} | {$Produk->TampilVendor()} | Kategori : {$Produk->kategori}";
        return $str;
    }
}

// pembuatan instance dari class Produk (objek)
$produk1 = new Produk("Linen Shirt Relaxed" ,"L", "Rp. 145.000", "Growth.csl", "Bali", "Shirt");

echo $produk1->TampilVendor();
echo "<br>";
$infolengkap = new CetakInfolengkap;
echo $infolengkap->InfoProduk($produk1)





?>