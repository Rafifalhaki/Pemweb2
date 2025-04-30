<?php
require_once '../dbkoneksi.php';

$id = $_GET['id'] ?? '';
$row = [];

if ($id) {
    $stmt = $dbh->prepare("SELECT * FROM pasien WHERE id = ?");
    $stmt->execute([$id]);
    $row = $stmt->fetch();
}

$kelurahan = $dbh->query("SELECT * FROM kelurahan");

ob_start();
?>
<form method="POST" action="proses_pasien.php" class="space-y-4">
    <input type="hidden" name="id" value="<?= $row['id'] ?? '' ?>">

    <div>
        <label>Kode</label>
        <input name="kode" type="text" value="<?= $row['kode'] ?? '' ?>" class="w-full border rounded px-3 py-2">
    </div>
    <div>
        <label>Nama</label>
        <input name="nama" type="text" value="<?= $row['nama'] ?? '' ?>" class="w-full border rounded px-3 py-2">
    </div>
    <div>
        <label>Tempat Lahir</label>
        <input name="tmp_lahir" type="text" value="<?= $row['tmp_lahir'] ?? '' ?>" class="w-full border rounded px-3 py-2">
    </div>
    <div>
        <label>Tanggal Lahir</label>
        <input name="tgl_lahir" type="date" value="<?= $row['tgl_lahir'] ?? '' ?>" class="w-full border rounded px-3 py-2">
    </div>
    <div>
        <label>Gender</label>
        <label><input type="radio" name="gender" value="L" <?= ($row['gender'] ?? '') === 'L' ? 'checked' : '' ?>> Laki-laki</label>
        <label><input type="radio" name="gender" value="P" <?= ($row['gender'] ?? '') === 'P' ? 'checked' : '' ?>> Perempuan</label>
    </div>
    <div>
        <label>Email</label>
        <input name="email" type="email" value="<?= $row['email'] ?? '' ?>" class="w-full border rounded px-3 py-2">
    </div>
    <div>
        <label>Alamat</label>
        <textarea name="alamat" class="w-full border rounded px-3 py-2"><?= $row['alamat'] ?? '' ?></textarea>
    </div>
    <div>
        <label>Kelurahan</label>
        <select name="kelurahan_id" class="w-full border rounded px-3 py-2">
            <?php foreach ($kelurahan as $k): 
                $sel = ($row['kelurahan_id'] ?? '') == $k['id'] ? 'selected' : '';
                echo "<option value='{$k['id']}' $sel>{$k['nama']}</option>";
            endforeach; ?>
        </select>
    </div>

    <div>
        <button type="submit" name="proses" value="simpan" class="bg-green-600 text-white px-4 py-2 rounded">Simpan</button>
        <a href="data_pasien.php" class="ml-2 text-gray-600">Kembali</a>
    </div>
</form>
<?php
$content = ob_get_clean();
$title = $id ? "Edit Pasien" : "Tambah Pasien";
include '../layout.php';
?>
