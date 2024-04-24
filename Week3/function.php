<?php
// Function define user

// Fungsi yang tidak mengembalikan nilai
function salam(){
    echo 'Assalamualaikum apa kabar...';
}

salam(); //cetaknya
echo '<br>';

function panggil($nama){
    echo 'Halo apa kabar mbak ' .$nama;
}

panggil("Zeta");

echo '<br>';

// Fungsi yang mengembalikan nilai
function hasil($a,$b){
    $c= $a * $b;
    return $c;
}

echo hasil (5,7);
echo '<br>';

// Buat fungsi hitung umur

function umur($tahun_lahir){
    $tahun_sekarang = 2024;
    $umur = $tahun_sekarang - $tahun_lahir;
    return $umur;
}

echo umur(2007);

?>