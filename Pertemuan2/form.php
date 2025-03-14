<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
<body>
    <div class="card">
        <div class="card-body">
            <h2 class="card-title text-center"> from Nilai mahasiswa</h2>
            <?php
    $ar_matkul = [
        'DDP'=>'Dasar-Dasar pemrograman',
        'WEB1'=>'Pemrograman Web 1',
        'WEB2'=>'Pemrograman Web 2',
        'BASDAT'=>'Basis Data',
        'ui/ux'=>'UI/UX',
        'jarkom'=>'Jaringan Komputer',
        'se'=>'sistem enterprise'
        
        ]
        ?>
<form method="post" action="">
    <div class="form-group row">
        <label for="nama" class="offset-2 col-2 col-form-label">Nama lengkap</label> 
        <div class="col-6">
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-address-card"></i>
                    </div>
                </div> 
                <input id="nama" name="nama" type="text" class="form-control">
            </div>
        </div>
    </div>
    <div class="form-group row">
        <label for="matkul" class="offset-2 col-2 col-form-label">Mata Kuliah</label> 
        <div class="col-6">
            <select id="matkul" name="matkul" class="custom-select">
                <option value="0" class="">-- Pilih Mata Kuliah --</option>
                <?php foreach ($ar_matkul as $key => $value) { ?>
                    <option value="<?= $key ?>"><?= $value ?></option>
                    <?php } ?>
                    
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="uts" class="offset-2 col-2 col-form-label">Nilai uts</label> 
            <div class="col-2">
                <input id="uts" name="uts" type="text" class="form-control">
            </div>
        </div>
        <div class="form-group row">
            <label for="uas" class="offset-2 col-2 col-form-label">Nilai uas</label> 
            <div class="col-2">
                <input id="uas" name="uas" type="text" class="form-control">
            </div>
        </div>
        <div class="form-group row">
            <label for="tugas" class="offset-2 col-2 col-form-label">Tugas praktikum</label> 
            <div class="col-2">
                <input id="tugas" name="tugas" type="text" class="form-control">
            </div>
        </div> 
        <div class="form-group row">
            <div class="offset-4 col-8">
                <button name="submit" type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </div>
    </form>
</div>
</div>
<hr style="border-width: 24px;">

<?php
include_once '../pertemuan4/daftar_nilai.php';
?>
        
    </body>
    </html>