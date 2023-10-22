<?php 
// pembuatan class
class Produk {
    // property
    public $nama, $size, $harga, $vendor, $loc, $kategori, $lingkarKepala, $lebarBahu;

    // constructor
    public function __construct($nama = "Nama", $size = "Ukuran", $harga = "0", $vendor = "null", $loc = "null", $kategori = "Kategori", $lingkarKepala = "null", $lebarBahu = "null") {
        $this->nama = $nama;
        $this->size = $size;
        $this->harga = $harga;
        $this->vendor = $vendor;
        $this->loc = $loc;
        $this->kategori = $kategori;
        $this->lingkarKepala = $lingkarKepala;
        $this->lebarBahu = $lebarBahu;
    }

    // method
    public function TampilVendor() {
        return "Vendor : {$this->vendor} | Lokasi Vendor : {$this->loc}";
    }

    // Jika tidak menggunakan paradigma inheritance kita perlu melakukan pengecekan menentukan apakah produk itu baju atau topi sehingga ukuran yg ditampilkan sesuai dengan produk
    public function TampilJenis() {
        $str = "{$this->nama} | {$this->kategori} | {$this->harga} | ";
        if ($this->kategori == "Shirt") {
            $str .= "{$this->lebarBahu} CM.";
        } else if ($this->kategori == "Cap") {
            $str .= "{$this->lingkarKepala} CM.";

        } return $str;
    }

}

// Objek sebagai tipe parameter
class CetakInfolengkap {
    public function InfoProduk(Produk $Produk) {
        $str = "Nama Produk : {$Produk->nama} | Size : {$Produk->size} | Harga : {$Produk->harga} | {$Produk->TampilVendor()} | Kategori : {$Produk->kategori}";
        return $str;
    }
}

// pembuatan instance dari class Produk (objek)
// before inheritance mengharuskan pemberian parameter yg tidak diperlukan
$produk1 = new Produk("Linen Shirt Relaxed" ,"L", "Rp. 145.000", "Growth.csl", "Bali", "Shirt", "0", "75");
$produk2 = new Produk("Trucker Arch" ,"L", "Rp. 170.000", "Growth.csl", "Bali", "Cap", "30", "0");

echo $produk1->TampilJenis();
echo "<br>";
echo $produk2->TampilJenis();


?>