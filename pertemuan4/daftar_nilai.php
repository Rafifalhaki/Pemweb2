<?php
require_once 'class_nilaimahasiswa.php';

$mhs1 = new NilaiMahasiswa();
$mhs1->nama = "Rizky";
$mhs1->matakuliah = "Pemrograman Web";
$mhs1->nilai_tugas = 80;
$mhs1->nilai_uts = 75;
$mhs1->nilai_uas = 85;

$mhs2 = new NilaiMahasiswa();
$mhs2->nama = "Fira";
$mhs2->matakuliah = "Pemrograman Web";
$mhs2->nilai_tugas = 90;
$mhs2->nilai_uts = 60;
$mhs2->nilai_uas = 88;

$mhs3 = new NilaiMahasiswa();
$mhs3->nama = "Taufiqqurrahman";
$mhs3->matakuliah = "Pemrograman Web";
$mhs3->nilai_tugas = 60;
$mhs3->nilai_uts = 50;
$mhs3->nilai_uas = 55;

$ar_mahasiswa = [$mhs1, $mhs2, $mhs3];

?>
<h2 style="text-align: center;">Daftar Nilai Mahasiswa</h2>
<table border="1" cellspacing="2" cellpading="2" width="100%">
    <thead>
        <tr>
            <th>no</th><th>nama</th><th>Mata kuliah</th><th>Nilai Tugas</th>
            <th>Nilai UTS</th><th>Nilai UAS</th><th>Nilai Akhir</th>
            <th>Kelulusan</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $no = 1;
        foreach ($ar_mahasiswa as $obj) {
        ?>
        <tr>
            <td><?= $no++; ?></td>
            <td><?= $obj->nama; ?></td>
            <td><?= $obj->matakuliah; ?></td>
            <td><?= $obj->nilai_tugas; ?></td>
            <td><?= $obj->nilai_uts; ?></td>
            <td><?= $obj->nilai_uas; ?></td>
            <td><?= $obj->getNilaiAkhir(); ?></td>
            <td><?= $obj->Kelulusan(); ?></td>
        </tr>    
       <?php } ?>
            <?php
            if (isset($_POST["submit"])){
                $nama = $_POST["nama"];
                $matakuliah = $_POST["matkul"];
                $nilai_tugas = $_POST["tugas"];
                $nilai_uts = $_POST["uts"];
                $nilai_uas = $_POST["uas"];
                $mhs = new NilaiMahasiswa();
                $mhs->nama = $nama;
                $mhs->matakuliah = $matakuliah;
                $mhs->nilai_tugas = $nilai_tugas;
                $mhs->nilai_uts = $nilai_uts;
                $mhs->nilai_uas = $nilai_uas;
                ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $nama; ?></td>
                    <td><?= $matakuliah; ?></td>
                    <td><?= $nilai_tugas; ?></td>
                    <td><?= $nilai_uts; ?></td>
                    <td><?= $nilai_uas; ?></td>
                    <td><?= $mhs->getNilaiAkhir(); ?></td>
                    <td><?= $mhs->kelulusan(); ?></td>
                </tr>
                <?php } ?>
            
    </tbody>
</table>