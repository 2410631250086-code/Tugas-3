<?php
require_once 'book.php';

class digitalBook extends book {
    public $fileSize;

    public function __construct ($judul, $penulis, $tahun, $fileSize) {
        parent::__construct($judul, $penulis, $tahun);
        $this->fileSize = $fileSize;
    }

    public function tampilkanInfo() {
        parent::tampilkanInfo();
        echo "File Size: " . $this->fileSize . "MB<br>";
    }
}
?>