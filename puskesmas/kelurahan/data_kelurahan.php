<?php
require_once '../dbkoneksi.php';
$rs = $dbh->query("SELECT * FROM kelurahan");

ob_start();
?>

<a href="form_kelurahan.php" class="bg-blue-600 text-white px-4 py-2 rounded mb-4 inline-block">+ Tambah Kelurahan</a>

<table class="w-full border border-gray-300">
    <thead class="bg-gray-100">
        <tr>
            <th class="border px-3 py-2">ID</th>
            <th class="border px-3 py-2">Nama Kelurahan</th>
            <th class="border px-3 py-2">Kecamatan ID</th>
            <th class="border px-3 py-2">Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($rs as $row): ?>
        <tr class="hover:bg-gray-50">
            <td class="border px-3 py-2"><?= $row['id'] ?></td>
            <td class="border px-3 py-2"><?= $row['nama'] ?></td>
            <td class="border px-3 py-2"><?= $row['kec_id'] ?></td>
            <td class="border px-3 py-2">
                <a href="form_kelurahan.php?id=<?= $row['id'] ?>" class="text-blue-500">Edit</a> |
                <a href="proses_kelurahan.php?delete=<?= $row['id'] ?>" class="text-red-500" onclick="return confirm('Hapus?')">Hapus</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?php
$content = ob_get_clean();
$title = "Data Kelurahan";
include '../layout.php';
?>
