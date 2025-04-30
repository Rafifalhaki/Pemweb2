<?php
require_once '../dbkoneksi.php';

$id = $_GET['id'] ?? '';
$row = [];

if ($id) {
    $stmt = $dbh->prepare("SELECT * FROM paramedik WHERE id=?");
    $stmt->execute([$id]);
    $row = $stmt->fetch();
}
$units = $dbh->query("SELECT * FROM unit_kerja");

ob_start();
?>
<form action="proses_paramedik.php" method="POST" class="space-y-4">
    <input type="hidden" name="id" value="<?= $row['id'] ?? '' ?>">
    
    <div>
        <label>Nama</label>
        <input name="nama" type="text" class="w-full border px-3 py-2 rounded" value="<?= $row['nama'] ?? '' ?>">
    </div>
    <div>
        <label>Gender</label>
        <label><input type="radio" name="gender" value="L" <?= ($row['gender'] ?? '') === 'L' ? 'checked' : '' ?>> Laki-laki</label>
        <label><input type="radio" name="gender" value="P" <?= ($row['gender'] ?? '') === 'P' ? 'checked' : '' ?>> Perempuan</label>
    </div>
    <div>
        <label>Tanggal Lahir</label>
        <input name="tgl_lahir" type="date" class="w-full border px-3 py-2 rounded" value="<?= $row['tgl_lahir'] ?? '' ?>">
    </div>
    <div>
        <label>Unit Kerja</label>
        <select name="unit_kerja_id" class="w-full border px-3 py-2 rounded">
            <?php foreach ($units as $u): 
                $sel = ($row['unit_kerja_id'] ?? '') == $u['id'] ? 'selected' : '';
                echo "<option value='{$u['id']}' $sel>{$u['nama']}</option>";
            endforeach; ?>
        </select>
    </div>
    <div>
        <button type="submit" name="proses" value="simpan" class="bg-green-600 text-white px-4 py-2 rounded">Simpan</button>
        <a href="data_paramedik.php" class="ml-2 text-gray-500">Kembali</a>
    </div>
</form>
<?php
$content = ob_get_clean();
$title = $id ? "Edit Paramedik" : "Tambah Paramedik";
include '../layout.php';
?>
