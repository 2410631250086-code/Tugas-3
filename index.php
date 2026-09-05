<?php

require_once 'book.php';
require_once 'member.php';
require_once 'digitalBook.php';

$buku1 = new Book("Dilan", "Pidi Baiq", 2014);
$buku2 = new Book("Mariposa", "Luluk H.F.", 2018);
$buku3 = new digitalBook("Dear Nathan", "Erisca Febriani", 2016, 5);

$member1 = new member ("Azmi", "S19");

echo "<h2> Informasi Buku </h2>";

echo "<b>buku 1</b><br>";
$buku1 ->tampilkanInfo();

echo "<br><b>buku 2</b><br>";
$buku2 ->tampilkanInfo();

echo "<br><b>buku 3</b><br>";
$buku3 ->tampilkanInfo();

echo "<hr>";
echo "<h2>Informasi member</h2>";
$member1 ->tampilkanInfo();

echo "<hr>";
echo "<h2>simulasi peminjaman</h2>";
$member1-> pinjamBuku($buku2);

?>