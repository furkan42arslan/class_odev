<?php

class sekil{
    public $g; // dikdörtgen genislik
    public $y; // dikdörtgen yukseklik
    public $a; // kare tüm kenarlar
    public $u; // Ucgen çevre
    public $u_taban;
    public $u_yukseklik; 

    // BEGIN: DIKDÖRTGEN 
    public function dikdortgen_alan(){
        return ($this->g * $this->y);
    }

    public function dikdortgen_cevre(){
        return 2*($this->g + $this->y);
    }
    // END: DIKDÖRTGEN

    // BEGIN: KARE
    public function kare_alan(){
        return $this->a * $this->a;
    }

    public function kare_cevre(){
        return (4 * $this->a);
    }
    // END: KARE

    // BEGIN: UCGEN
    public function ucgen_alan(){
        return ($this->ucgen_taban * $this->ucgen_yukseklik)/2;
    }

    public function ucgen_cevre(){
        return ($this->u * 3);
    }
    // END: UCGEN
}

// class'ın başlatılması
$sekil = new sekil();

// Değerlerin verilmesi
$sekil->g = 4; // Dikdörtgen için genişlik değeri
$sekil->y = 2; // Dikdörtgen için yükseklik değeri
$sekil->a = 5; // Kare için değer
$sekil->u = 6; // Üçgen için değer
$sekil->ucgen_taban = 10; 
$sekil->ucgen_yukseklik = 10;

// Dikdörtgen Sonuçlar
echo "Dikdörtgen alan: ".$sekil->dikdortgen_alan().'<br>'; // Dikdörtgen alan: 8
echo "Dikdörtgen çevre: ".$sekil->dikdortgen_cevre().'<br>'; // Dikdörtgen çevre: 12

// Kare Sonuçlar
echo "Kare alan: ".$sekil->kare_alan().'<br>'; // Kare alan: 25
echo "Kare çevre: ".$sekil->kare_cevre().'<br>'; // Kare çevre: 20

// Ucgen Sonuçlar
echo "Ucgen alan: ".$sekil->ucgen_alan().'<br>'; // Ucgen alan: 50
echo "Ucgen çevre: ".$sekil->ucgen_cevre().'<br>'; // Ucgen çevre: 18