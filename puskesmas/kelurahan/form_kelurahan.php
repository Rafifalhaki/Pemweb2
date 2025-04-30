<?php
require_once '../dbkoneksi.php';
$id = $_GET['id'] ?? '';
$row = [];

if ($id) {
    $stmt = $dbh->prepare("SELECT * FROM kelurahan WHERE id = ?");
    $stmt->execute([$id]);
    $row = $stmt->fetch();
}

ob_start();
?>

<form method="POST" action="proses_kelurahan.php" class="space-y-4">
    <input type="hidden" name="id" value="<?= $row['id'] ?? '' ?>">

    <div>
        <label class="block">Nama Kelurahan</label>
        <input name="nama" type="text" value="<?= $row['nama'] ?? '' ?>" class="w-full border rounded px-3 py-2" required>
    </div>

    <div>
        <label class="block">ID Kecamatan</label>
        <input name="kec_id" type="number" value="<?= $row['kec_id'] ?? '' ?>" class="w-full border rounded px-3 py-2" required>
    </div>

    <div>
        <button type="submit" name="proses" value="simpan" class="bg-green-600 text-white px-4 py-2 rounded">Simpan</button>
        <a href="data_kelurahan.php" class="ml-2 text-gray-600">Kembali</a>
    </div>
</form>

<?php
$content = ob_get_clean();
$title = $id ? "Edit Kelurahan" : "Tambah Kelurahan";
include '../layout.php';
?>
