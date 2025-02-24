<?php

// Mendefinisikan sebuah array
$list_buah = ["Pepaya", "Mangga", "Pisang", "Jambu"];

/**
 * Nilai dalam array masing-masing memiliki sebuah kunci yang disebut dengan index
 * 
 * index di mulai dari 0
 */

echo $list_buah[2];
echo "<br>List buah berisi ". count($list_buah) . "buah";

// mencetak seluruh nilai di dalam array
echo "<ol>";
foreach($list_buah as $buah) {
    echo "<li>$buah</li>";
}
echo "</ol>";

// Menambah nilai array
$list_buah[] ="durian";
echo "<ol>";
foreach($list_buah as $buah) {
    echo "<li>$buah</li>";
}
echo "</ol>";

// Menghapus nilai array berdasarkan index nya
unset($list_buah[1]);
echo "<ol>";
foreach($list_buah as $buah) {
    echo "<li>$buah</li>";
}
echo "</ol>";

// mengubah nilai array berdasarkan index 
$list_buah[0] = "Manggis";
echo "<ol>";
foreach($list_buah as $buah) {
    echo "<li>$buah</li>";
}
echo "</ol>";

// mencetak seluruh nilai array beserta index
echo "<ul>";
foreach($list_buah as $index => $buah) {
    echo "<li>Buah dengan index $index adalah $buah</li>";
}
echo "</ul>";


