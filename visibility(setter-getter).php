<?php 
// pembuatan class
// Method Get merupakakan getter
// Method Set merupakakan setter
class Produk {
    // property
    public $nama, $size, $harga, $vendor, $loc, $kategori;
    // diskon protected untuk menghindari perubahan value dari luar class
    protected $diskon = "0";

    // constructor
    public function __construct($nama = "Nama", $size = "Ukuran", $harga = 0, $vendor = "null", $loc = "null", $kategori = "Kategori",) {
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

// Objek sebagai tipe parameter
class CetakInfolengkap {
    public function InfoProduk(Produk $Produk) {
        $str = "Nama Produk : {$Produk->nama} | Size : {$Produk->size} | Harga : {$Produk->harga} | {$Produk->TampilVendor()} | Kategori : {$Produk->kategori}";
        return $str;
    }
}

// child class dari Produk (inheritance)
class Cap extends Produk {
    public $lingkarKepala;

    public function __construct($nama = "Nama", $size = "Ukuran", $harga = 0, $vendor = "null", $loc = "null", $kategori = "Kategori", $lingkarKepala = "null"){

        // overridding dari parent method
        parent::__construct($nama, $size, $harga, $vendor, $loc, $kategori);

        $this->lingkarKepala = $lingkarKepala;

    }
    public function GetJenis() {
        $str = "Nama Produk : {$this->nama} | Size : {$this->size} | Harga : {$this->harga} | {$this->TampilVendor()} | Kategori : {$this->kategori} | Lingkar Kepala : {$this->lingkarKepala} CM.";
        return $str;
    }

    public function SetDiskon ($diskon) {
        $this->diskon = $diskon;
    }

    public function GetHarga() {
        return $this->harga - ($this->harga * $this->diskon / 100);
    }
}

class Shirt extends Produk {
    public $lebarBahu;

    public function __construct($nama = "Nama", $size = "Ukuran", $harga = 0, $vendor = "null", $loc = "null", $kategori = "Kategori", $lebarBahu = "null"){

        // overridding dari parent method
        parent::__construct($nama, $size, $harga, $vendor, $loc, $kategori);

        $this->lebarBahu = $lebarBahu;

    }

    public function GetJenis() {
        $str = "Nama Produk : {$this->nama} | Size : {$this->size} | Harga : {$this->harga} | {$this->TampilVendor()} | Kategori : {$this->kategori} | Lebar Bahu : {$this->lebarBahu} CM.";
        return $str;
    }

    public function SetDiskon ($diskon) {
        $this->diskon = $diskon;
    }

    public function GetHarga() {
        return $this->harga - ($this->harga * $this->diskon / 100);
    }
}

$topi = new Cap("trucker", "M", 70000, "Growth.csl", "Bali", "Topi", "30");
$kemeja = new Shirt("Linen Shirt Relaxed" ,"L", 145000, "Growth.csl", "Bali", "Shirt", "75");

echo $topi->GetJenis();
echo "<br>";
echo $kemeja->GetJenis();
echo "<hr>";
 
$topi->SetDiskon(10);
echo "<br>";
echo "Harga Topi after diskon : {$topi->GetHarga()}";
echo "<ber>";
$kemeja->SetDiskon(20);
echo "<br>";
echo "Harga Kemeja after diskon : {$kemeja->GetHarga()}";
?>