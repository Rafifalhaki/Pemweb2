<?php
 require_once "class_lingkaran.php";
 echo "NILAI PHI " . Lingkaran::PHI;
 $lingkaran1 = new Lingkaran( 8.4 );
 $lingkaran2 = new Lingkaran( 20 );

 echo "jari-jari lingkaran 1 = " . $lingkaran1->jari;
 echo "<br>Nilai PHI = " . $lingkaran1::PHI;
 echo "<br>Luas lingkaran 1 = " . $lingkaran1->getluas();
 echo "<br> keliling lingkaran 1 = " . $lingkaran1->getkeliling();
 echo "<hr>";
 $lingkaran1->cetak();
 echo "<hr>";
 $lingkaran2->cetak();
?>