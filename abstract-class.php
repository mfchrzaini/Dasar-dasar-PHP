<?php
// method dari abstract class bisa di akses oleh child
// dalam contoh dibawah diberikan contoh case dimana kita tidak bisa melakukan intansiasi abstract class
// jika class buah bukan abstrak maka method makan juga bukan abstrak dan bisa di akses saat di instansiasi sedangkan dalam kasus tersebut kita tidak tahu buah apa yang dimakan ketika kita menjalankan method makan
// karena itu diperlukan penerapan abstract class dalam case tersebut
abstract class buah {
    abstract public function makan();
}


class jeruk extends buah {
     public function makan() {
        echo "kupas jeruk lalu makan";
     }
}

$jeruk = new jeruk();

echo $jeruk->makan();

?>
