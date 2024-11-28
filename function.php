<?php

function perkenalan() {
    echo "Halo Nama Saya : Muhamad Maulana";
}

function perkalian($angka1,$angka2) {
    return $angka1 * $angka2;
}

perkenalan();
echo "<br>";
echo "Umur Saya :";
echo perkalian(8,2);