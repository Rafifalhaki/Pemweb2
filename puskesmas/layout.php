<?php $base_url = "/pemweb2/puskesmas/"; ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title><?= $title ?? 'Puskesmas App' ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body class="bg-gray-100 text-gray-800">

    <!-- Top Navbar -->
    <div class="flex justify-between items-center bg-white px-6 py-3 shadow">
        <div class="text-xl font-bold text-blue-600">
            🏥 PUSKESMAS APP
        </div>
        <div class="flex items-center gap-4">
            <span><i class="fas fa-user"></i> Guest</span>
            <a href="#" class="text-red-500 hover:text-red-700"><i class="fas fa-sign-out-alt"></i> Logout</a>
        </div>
    </div>

    <div class="flex">
        <!-- Sidebar -->
        <aside class="w-64 bg-white h-screen shadow">
            <div class="p-6">
                <h2 class="text-lg font-bold mb-4 text-blue-600">MENU</h2>
                <ul class="space-y-3">
                    <li><a href="<?= $base_url ?>index.php" class="flex items-center gap-2 text-gray-700 hover:text-blue-600"><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>
                    <li><a href="<?= $base_url ?>paramedik/data_paramedik.php" class="flex items-center gap-2 text-gray-700 hover:text-blue-600"><i class="fas fa-user-nurse"></i> Paramedik</a></li>
                    <li><a href="<?= $base_url ?>pasien/data_pasien.php" class="flex items-center gap-2 text-gray-700 hover:text-blue-600"><i class="fas fa-user-injured"></i> Pasien</a></li>
                    <li><a href="<?= $base_url ?>periksa/data_periksa.php" class="flex items-center gap-2 text-gray-700 hover:text-blue-600"><i class="fas fa-notes-medical"></i> Pemeriksaan</a></li>
                    <li><a href="<?= $base_url ?>kelurahan/data_kelurahan.php" class="flex items-center gap-2 text-gray-700 hover:text-blue-600"><i class="fas fa-map-marker-alt"></i> Kelurahan</a></li>
                </ul>
            </div>
        </aside>

        <!-- Main Content -->
        <main class="flex-1 p-8">
            <?= $content ?? '' ?>
        </main>
    </div>

</body>
</html>
