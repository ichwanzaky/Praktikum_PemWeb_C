<?php
//Array populasi awal
$populasi = [
    "Chicago, IL" => 2695598,
    "Dallas, TX" => 1197816,
    "Houston, TX" => 2100263,
    "Los Angeles, CA" => 3792621,
    "New York, NY" => 8175133,
    "Philadelphia, PA" => 1526006,
    "Phoenix, AZ" => 1445632,
    "San Antonio, TX" => 1327407,
    "San Diego, CA" => 1307402,
    "San Jose, CA" => 945942,
];

$ubah = [
    "Philadelphia, PA" => 1400000,
    "Los Angeles, CA" => 3700000,
];

echo nl2br ("SEBELUM DIUBAH: \n");
foreach ($populasi as $nama => $pop) {
    echo nl2br ("$nama => $pop \n");
}

echo nl2br ("\n");
echo nl2br ("SETELAH DIUBAH: \n");
$ubahPopulasi = array_replace($populasi,$ubah);
foreach ($ubahPopulasi as $nama => $pop){
    echo nl2br ("$nama => $pop \n"); 
}
?>