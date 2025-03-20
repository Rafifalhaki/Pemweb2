<?php
class NilaiMahasiswa {
    var $matakuliah;
    var $nilai;
    var $nim;

    function __construct($matakuliah, $nim, $nilai) {
        $this->matakuliah = $matakuliah;
        $this->nim = $nim;
        $this->nilai = $nilai;
    }

    function grade() {
        if ($this->nilai >= 85 && $this->nilai <= 100) {
            return "A";
        } elseif ($this->nilai >= 70 && $this->nilai < 85) {
            return "B";
        } elseif ($this->nilai >= 56 && $this->nilai < 70) {
            return "C";
        } elseif ($this->nilai >= 36 && $this->nilai < 56) {
            return "D";
        } else {
            return "E";
        }
    }

    function hasil() {
        return $this->nilai >= 56 ? "LULUS" : "TIDAK LULUS";
    }
}

// Proses data dari form
$nim = isset($_POST['nim']) ? $_POST['nim'] : "";
$matakuliah = isset($_POST['matakuliah']) ? $_POST['matakuliah'] : "";
$nilai = isset($_POST['nilai']) ? $_POST['nilai'] : "";

$mahasiswa = null;
if (!empty($nim) && !empty($matakuliah) && !empty($nilai)) {
    $mahasiswa = new NilaiMahasiswa($matakuliah, $nim, $nilai);
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form Nilai Ujian</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">WEB02</a>
        <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Review PHP+" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Submit</button>
        </form>
    </div>
</nav>

<!-- Container -->
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h4>Form Nilai Ujian</h4>
                </div>
                <div class="card-body">
                    <form method="POST" action="">
                        <div class="mb-3">
                            <label class="form-label">NIM</label>
                            <input type="text" class="form-control" name="nim" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Pilih MK</label>
                            <select class="form-control" name="matakuliah" required>
                                <option value="Data Warehouse">Data Warehouse</option>
                                <option value="Pemrograman Web">Pemrograman Web</option>
                                <option value="Basis Data">Basis Data</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Nilai</label>
                            <input type="number" class="form-control" name="nilai" min="0" max="100" required>
                        </div>
                        <button type="submit" class="btn btn-success">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <?php if ($mahasiswa): ?>
        <div class="row justify-content-center mt-4">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header bg-success text-white">
                        <h4>Hasil</h4>
                    </div>
                    <div class="card-body">
                        <p><strong>NIM:</strong> <?= $mahasiswa->nim ?></p>
                        <p><strong>Nama Mata Kuliah:</strong> <?= $mahasiswa->matakuliah ?></p>
                        <p><strong>Nilai:</strong> <?= $mahasiswa->nilai ?></p>
                        <p><strong>Grade:</strong> <?= $mahasiswa->grade() ?></p>
                        <p><strong>Hasil:</strong> <?= $mahasiswa->hasil() ?></p>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>
</div>

<!-- Footer -->
<footer class="text-center mt-4">
    <p>ooOOO Selamat mencoba !!! Kamu Bisa !!! OOOoo</p>
</footer>

</body>
</html>
