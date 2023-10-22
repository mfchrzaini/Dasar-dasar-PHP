<?php
// method dari abstract class bisa di akses oleh child
abstract class coba {
    public function sayHeyo() {
        return "Say Heyo";
    }
}


class anakcoba extends coba {
     public function heyo() {
        $str = "ini function dari mother {$this->sayHeyo()}";
        return $str;
     }
}


$anak = new anakcoba;

echo $anak->heyo();
?>