<?php
require_once '../dbkoneksi.php';

$id = $_GET['id'] ?? '';
$row = [];

if ($id) {
    $stmt = $dbh->prepare("SELECT * FROM periksa WHERE id=?");
    $stmt->execute([$id]);
    $row = $stmt->fetch();
}

$pasien = $dbh->query("SELECT * FROM pasien");
$dokter = $dbh->query("SELECT * FROM paramedik");

ob_start();
?>
<form action="proses_periksa.php" method="POST" class="space-y-4">
    <input type="hidden" name="id" value="<?= $row['id'] ?? '' ?>">

    <div>
        <label class="block">Tanggal</label>
        <input type="date" name="tanggal" value="<?= $row['tanggal'] ?? '' ?>" class="w-full border px-3 py-2 rounded">
    </div>
    <div>
        <label class="block">Pasien</label>
        <select name="pasien_id" class="w-full border px-3 py-2 rounded">
            <?php foreach ($pasien as $p): 
                $sel = ($row['pasien_id'] ?? '') == $p['id'] ? 'selected' : '';
                echo "<option value='{$p['id']}' $sel>{$p['nama']}</option>";
            endforeach; ?>
        </select>
    </div>
    <div>
        <label class="block">Dokter</label>
        <select name="dokter_id" class="w-full border px-3 py-2 rounded">
            <?php foreach ($dokter as $d): 
                $sel = ($row['dokter_id'] ?? '') == $d['id'] ? 'selected' : '';
                echo "<option value='{$d['id']}' $sel>{$d['nama']}</option>";
            endforeach; ?>
        </select>
    </div>
    <div class="grid grid-cols-2 gap-4">
        <div>
            <label class="block">Tensi</label>
            <input type="text" name="tensi" value="<?= $row['tensi'] ?? '' ?>" class="w-full border px-3 py-2 rounded">
        </div>
        <div>
            <label class="block">Berat (kg)</label>
            <input type="number" step="0.1" name="berat" value="<?= $row['berat'] ?? '' ?>" class="w-full border px-3 py-2 rounded">
        </div>
        <div>
            <label class="block">Tinggi (cm)</label>
            <input type="number" step="0.1" name="tinggi" value="<?= $row['tinggi'] ?? '' ?>" class="w-full border px-3 py-2 rounded">
        </div>
    </div>
    <div>
        <label class="block">Keterangan</label>
        <textarea name="keterangan" class="w-full border px-3 py-2 rounded"><?= $row['keterangan'] ?? '' ?></textarea>
    </div>

    <div>
        <button type="submit" name="proses" value="simpan" class="bg-green-600 text-white px-4 py-2 rounded">Simpan</button>
        <a href="data_periksa.php" class="ml-2 text-gray-500">Kembali</a>
    </div>
</form>
<?php
$content = ob_get_clean();
$title = $id ? "Edit Pemeriksaan" : "Tambah Pemeriksaan";
include '../layout.php';
?>
