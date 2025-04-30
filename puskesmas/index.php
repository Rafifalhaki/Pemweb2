<?php
require_once 'dbkoneksi.php';

$jml_paramedik = $dbh->query("SELECT COUNT(*) FROM paramedik")->fetchColumn();
$jml_pasien = $dbh->query("SELECT COUNT(*) FROM pasien")->fetchColumn();
$jml_periksa = $dbh->query("SELECT COUNT(*) FROM periksa")->fetchColumn();
$jml_kelurahan = $dbh->query("SELECT COUNT(*) FROM kelurahan")->fetchColumn();

ob_start();
?>
<h1 class="text-2xl font-bold mb-6"><i class="fas fa-tachometer-alt"></i> Dashboard</h1>

<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
    <div class="bg-blue-100 border-l-4 border-blue-600 p-4 rounded shadow">
        <div class="flex items-center justify-between">
            <div>
                <h3 class="text-sm text-gray-700">Total Paramedik</h3>
                <p class="text-2xl font-bold text-blue-700"><?= $jml_paramedik ?></p>
            </div>
            <i class="fas fa-user-nurse fa-2x text-blue-600"></i>
        </div>
    </div>

    <div class="bg-green-100 border-l-4 border-green-600 p-4 rounded shadow">
        <div class="flex items-center justify-between">
            <div>
                <h3 class="text-sm text-gray-700">Total Pasien</h3>
                <p class="text-2xl font-bold text-green-700"><?= $jml_pasien ?></p>
            </div>
            <i class="fas fa-user-injured fa-2x text-green-600"></i>
        </div>
    </div>

    <div class="bg-yellow-100 border-l-4 border-yellow-600 p-4 rounded shadow">
        <div class="flex items-center justify-between">
            <div>
                <h3 class="text-sm text-gray-700">Total Pemeriksaan</h3>
                <p class="text-2xl font-bold text-yellow-700"><?= $jml_periksa ?></p>
            </div>
            <i class="fas fa-notes-medical fa-2x text-yellow-600"></i>
        </div>
    </div>

    <div class="bg-purple-100 border-l-4 border-purple-600 p-4 rounded shadow">
        <div class="flex items-center justify-between">
            <div>
                <h3 class="text-sm text-gray-700">Total Kelurahan</h3>
                <p class="text-2xl font-bold text-purple-700"><?= $jml_kelurahan ?></p>
            </div>
            <i class="fas fa-map-marker-alt fa-2x text-purple-600"></i>
        </div>
    </div>
</div>

<?php
$content = ob_get_clean();
$title = "Dashboard Puskesmas";
include 'layout.php';
?>
