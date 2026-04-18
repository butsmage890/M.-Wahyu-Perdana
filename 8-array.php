<?php

// Contoh penggunaan array di PHP

// Array numerik
$numbers = array(1, 2, 3, 4, 5);
echo "Array numerik: ";
print_r($numbers);
echo "<br>";

// Array asosiatif
$person = array("nama" => "wahyu", "umur" => 21, "kota" => "lombok");
echo "Array asosiatif: ";
print_r($person);
echo "<br>";

// Mengakses elemen array
echo "Elemen pertama array numerik: " . $numbers[0] . "<br>";
echo "Nama dari array asosiatif: " . $person["nama"] . "<br>";
