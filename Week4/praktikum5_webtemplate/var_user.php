<?php
//definisikan variables
// $ :Untuk memanggil variable user
$nama = 'Muhammad Farhan Rum';
$umur = 18;
$berat = 80;

echo 'Nama : ' . $nama;
echo '<br/>Umur : ' . $umur. ' Tahun';
echo ' <br/>Berat : '. $berat. ' Kg';

echo "<br/>Hello $nama Apakabar";


echo '<br>';


// Definisikan variable system
// $_ :untuk memanggil variable system

echo 'Dokumen Root' . $_SERVER["DOCUMENT_ROOT"];
echo '<br/>Nama File' . $_SERVER["PHP_SELF"];


// Definisikan Konstanta
// define: untuk memanggil variable constanta

?>