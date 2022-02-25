<?php
// membuat variable
// $namaVariable = isiVariable
$nama = "M Abdurrahman A";
$umur = 20;
$berat = 50;

// menampilkan variable yg telah dibuat
// echo "data yang ingin ditampilkan";
echo "Nama : " . $nama ;
echo "<br/>Umur : $umur" ;
echo "<br/>Berat : $berat" ;

// menampilkan variable sistem
echo "<br/> Dokumen root : " . $_SERVER[ 'DOCUMENT_ROOT'] ;
echo "<br/> Nama file : " . $_SERVER['PHP_SELF'] ;

// membuat variable const
// define('namaVariable' , nilaiVariable) ;
Define('PHI', 3.14) ;
$r = 10 ;
$luas = PHI * $r * $r ;
echo "<br/> luas lingkaran : $luas ";