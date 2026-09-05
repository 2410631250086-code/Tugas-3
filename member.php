<?php

class member {
    public $nama;
    public $id;

    public function __construct($nama, $id) {
        $this -> nama = $nama;
        $this -> id = $id;
    }

    public function tampilkanInfo() {
        echo "Nama member: " . $this -> nama . "<br>";
        echo "ID member: " . $this -> id . "<br>";
    }

    public function pinjamBuku($buku) {
        if ($buku -> dipinjam == false) {
            $buku -> dipinjam = true;

            echo $this->nama . " meminjam buku \"" . $buku->judul . "\" . <br>";
            echo "status: berhasil dipinjam.";
        } else {
            echo "buku \" " . $buku ->judul . "\" sedang dipinjam.";
        }
    }
}
?>