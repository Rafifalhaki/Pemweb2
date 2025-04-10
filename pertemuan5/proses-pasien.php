<?php 
require './dbkoneksi.php';

if (isset($_POST['submit'])) {
    // tangkapa data dari form
    $nama = $_POST['nama'];
    $kode = $_POST['kode'];
    $tmp_lahir = $_POST['tmp_lahir'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $alamat = $_POST['alamat'];
    $kelurahan_id = $_POST['kelurahan_id'];
    
    // proses insert ke database
    try {
     $sql = "INSERT INTO pasien (nama, kode, tmp_lahir, tgl_lahir, gender, email, alamat, kelurahan_id) VALUES (?,?,?,?,?,?,?,?)";
     $stmt = $db->prepare($sql);
     $stmt->execute([$nama, $kode, $tmp_lahir, $tgl_lahir, $gender, $email, $alamat, $kelurahan_id]);
     echo "ok";
     header("Location: list-pasien.php");
    } catch (Throwable $e) {
      echo "Eror while insert data pasien";
      echo $e;  
    }
        
}

