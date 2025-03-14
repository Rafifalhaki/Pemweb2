<?php
require_once 'PersegiPanjang.php';



$persegiPanjang = new PersegiPanjang(10, 5);

echo "Luas Persegi panjang: " . $persegiPanjang->hitungLuas() . "<br>";
echo "Keliling Persegi panjang: " . $persegiPanjang->hitungKeliling();
?>
