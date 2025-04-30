<?php
require_once '../dbkoneksi.php';

if ($_POST['proses'] == 'simpan') {
    if ($_POST['id']) {
        $sql = "UPDATE paramedik SET nama=?, gender=?, tgl_lahir=?, unit_kerja_id=? WHERE id=?";
        $stmt = $dbh->prepare($sql);
        $stmt->execute([
            $_POST['nama'], $_POST['gender'], $_POST['tgl_lahir'], $_POST['unit_kerja_id'], $_POST['id']
        ]);
    } else {
        $sql = "INSERT INTO paramedik (nama, gender, tgl_lahir, unit_kerja_id) VALUES (?,?,?,?)";
        $stmt = $dbh->prepare($sql);
        $stmt->execute([
            $_POST['nama'], $_POST['gender'], $_POST['tgl_lahir'], $_POST['unit_kerja_id']
        ]);
    }
} elseif (isset($_GET['delete'])) {
    $stmt = $dbh->prepare("DELETE FROM paramedik WHERE id=?");
    $stmt->execute([$_GET['delete']]);
}

header("Location: data_paramedik.php");
exit;
