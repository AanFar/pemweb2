<?php
//array: Sekumpulan data
//array numerik dan array asosiatif
//pakai perulangan foreach untuk pemanggilan array

// 1. ARRAY NUMERIK
$ar_buah = array ('pepaya', 'mangga', 'pisang', 'jeruk' );

// cetak index  ke berapa?
echo $ar_buah[2];


echo '<br>';
// count: menghitung jumlah dari variable user
$jumlah = count($ar_buah);
echo $jumlah;


// lihat hasil sekumpulan data buah dengan foreach
foreach ($ar_buah as $value) {
    echo "$value <br>" ;
}

echo '<br>';

foreach ($ar_buah as $index =>$value) {
    echo "$index $value <br>" ;
}

echo '<br>';

//2. Array asosiatif adalah dimana kita yang menentukan indexnya sendiri
$ar_hewan = array (10=>'kucing', 20=>'burung', 30=>'singa', 'ikan');
foreach ($ar_hewan as $index =>$value) {
    echo "$index $value <br>" ;
}


?>