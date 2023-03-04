<?php

Class Kendaraan{
    var $warna;
    var $jenis;
    var $bahan_bakar;

    public function berjalan_maju(){
        echo 'saya bisa berjalan maju';
    }

    public function berjalan_belok(){
        echo 'saya bisa berjalan belok';
    }
    
    public function mundur (){
        echo 'saya bisa berjalan mundur';
    }
}

Class MahlukHidup{
    var $pernapasan = ' Paru - Paru';

    public function bernafas(){
        echo 'saya bernapas dengan'.$this->pernapasan;
    }

    public function makan(){
        echo 'saya makan nasi';
    }

}

$mobil = new Kendaraan();
// $mobil->mundur();
$manusia = new MahlukHidup();
$manusia->bernafas();

?>