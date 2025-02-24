<?php

// 
$nama_depan = "Nawaf";
$nama_belakang = 'Hakim';
$umur = 17;
$tb = 166.9;


echo $nama_depan . " " . $nama_belakang;
echo "<br>Nama Saya $nama_depan dan saya berumur $umur tahun";

echo "<br /><br />";

//  Variable system 
echo 'dokumen root' . $_SERVER ["DOCUMENT_ROOT"];

echo "<br /><br />";

//  variable constant
define('PHI', 3.14);

$r = 8;
$luas = PHI * $r * $r;

echo "Lingkaran dengan jari-jari {$r}cm memiliki luas {$luas} cm2";
