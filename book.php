<?php

class book {
    public $judul;
    public $penulis;
    public $tahun;
    public $dipinjam = false;

    public function __construct($judul, $penulis, $tahun) {
        $this -> judul = $judul;
        $this -> penulis = $penulis;
        $this -> tahun = $tahun;
    }

    public function tampilkanInfo() {
        echo "judul: " . $this->judul . "<br>";
        echo "penulis: " . $this->penulis . "<br>";
        echo "tahun: " . $this->tahun . "<br>";

    }
}
?>