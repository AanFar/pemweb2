<?php
$nama = $_GET ['nama'];
$matkul = $_GET ['matkul'];
$nilai_uts = $_GET ['nilai_uts'];
$nilai_uas = $_GET ['nilai_uas'];
$nilai_tugas = $_GET ['nilai_tugas'];

// Buat Total Nilai (Dari nilai (UTS+UAS+Tugas/3)
$total_nilai = ($nilai_uts + $nilai_uas + $nilai_tugas) / 3;

// Buat Perhitungan IF Untuk Mencari Grade
if ($total_nilai >=85){
    $grade = "A";
}
elseif ($total_nilai >=70){
    $grade = "B";
}
elseif ($total_nilai >=56){
    $grade = "C";
}
elseif ($total_nilai >=36){
    $grade = "D";
}
elseif ($total_nilai >=0){
    $grade = "E";
}
else {
    $grade = "I";
}

// Buat Perhitungan SWICTHCASE untuk mencati predikat
switch($grade){
    case "A":
        $predikat = "Sangat Memuaskan";
        break;
    case "B":
        $predikat = "Memuaskan";
        break;
    case "C":
        $predikat = "Cukup";
        break;
    case "D":
        $predikat = "Kurang";
        break;
    case "E":
        $predikat = "Sangat Kurang";
        break;
    default:
        $predikat = "Tidak ada";
        break;
}

// Buat Perhitungan IF untuk mencari lulus
if($total_nilai >= 70){
    $status="Lulus";
}
else{
    $status="Tidak Lulus";
        
}


// Cetak Hasil
echo 'Nama:' . $nama . '<br>';
echo 'Mata Kuliah:' . $matkul . '<br>';
echo 'Nilai UTS:' . $nilai_uts . '<br>';
echo 'Nilai UAS:' . $nilai_uas . '<br>';
echo 'Nilai Tugas/Praktikum:' . $nilai_tugas . '<br>';
echo 'Total Nilai:' . $total_nilai . '<br>';
echo 'Grade:' . $grade . '<br>';
echo 'Predikat:' . $predikat . '<br>';
echo 'status:' . $status;

?>