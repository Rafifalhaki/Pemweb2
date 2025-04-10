<?php
include 'dbkoneksi.php';
$query = "SELECT * FROM pasien";
$statement = $dbh->prepare($query);
$statement->execute();
$pasien = $statement->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Pasien</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.1/dist/css/adminlte.min.css">
    <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.1/dist/js/adminlte.min.js"></script>
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <ul class="navbar-nav">
            <li class="nav-item d-none d-sm-inline-block">
                <a href="#" class="nav-link">Home</a>
            </li>
        </ul>
    </nav>
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <a href="#" class="brand-link"> <span class="brand-text font-weight-light">AdminLTE</span> </a>
        <div class="sidebar">
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" role="menu">
                    <li class="nav-item">
                        <a href="data_pasien.php" class="nav-link active">
                            <p>Data Pasien</p>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </aside>
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Data Pasien</h1>
                    </div>
                </div>
            </div>
        </div>
        <section class="content">
            <div class="container-fluid">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Daftar Pasien</h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Kode</th>
                                    <th>Nama</th>
                                    <th>Tempat Lahir</th>
                                    <th>Tanggal Lahir</th>
                                    <th>Gender</th>
                                    <th>Email</th>
                                    <th>Alamat</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($pasien as $p) : ?>
                                <tr>
                                    <td><?= $p['kode']; ?></td>
                                    <td><?= $p['nama']; ?></td>
                                    <td><?= $p['tmp_lahir']; ?></td>
                                    <td><?= $p['tgl_lahir']; ?></td>
                                    <td><?= $p['gender']; ?></td>
                                    <td><?= $p['email']; ?></td>
                                    <td><?= $p['alamat']; ?></td>
                                    <td>
                                        <a href="form_pasien.php?id=<?= $p['id']; ?>" class="btn btn-warning btn-sm">Edit</a>
                                        <a href="proses_pasien.php?hapus=<?= $p['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus?');">Delete</a>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
</body>
</html>
