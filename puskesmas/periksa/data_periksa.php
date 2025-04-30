<?php
require_once '../dbkoneksi.php';

$sql = "SELECT pr.*, pa.nama AS nama_pasien, pm.nama AS nama_dokter
        FROM periksa pr
        JOIN pasien pa ON pr.pasien_id = pa.id
        JOIN paramedik pm ON pr.dokter_id = pm.id";
$rs = $dbh->query($sql);

ob_start();
?>
<a href="form_periksa.php" class="bg-blue-600 text-white px-4 py-2 rounded">+ Tambah</a>
<table class="w-full mt-4 border border-gray-300">
    <thead class="bg-gray-100">
        <tr>
            <th class="border px-3 py-2">Tanggal</th>
            <th class="border px-3 py-2">Pasien</th>
            <th class="border px-3 py-2">Dokter</th>
            <th class="border px-3 py-2">Tensi</th>
            <th class="border px-3 py-2">Berat</th>
            <th class="border px-3 py-2">Tinggi</th>
            <th class="border px-3 py-2">Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($rs as $row): ?>
        <tr class="hover:bg-gray-50">
            <td class="border px-3 py-2"><?= $row['tanggal'] ?></td>
            <td class="border px-3 py-2"><?= $row['nama_pasien'] ?></td>
            <td class="border px-3 py-2"><?= $row['nama_dokter'] ?></td>
            <td class="border px-3 py-2"><?= $row['tensi'] ?></td>
            <td class="border px-3 py-2"><?= $row['berat'] ?> kg</td>
            <td class="border px-3 py-2"><?= $row['tinggi'] ?> cm</td>
            <td class="border px-3 py-2">
                <a href="form_periksa.php?id=<?= $row['id'] ?>" class="text-blue-500">Edit</a> |
                <a href="proses_periksa.php?delete=<?= $row['id'] ?>" class="text-red-500" onclick="return confirm('Hapus?')">Hapus</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<?php
$content = ob_get_clean();
$title = "Data Periksa";
include '../layout.php';
?>
