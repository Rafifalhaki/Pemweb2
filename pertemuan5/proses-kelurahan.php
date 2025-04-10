<?php 
require './dbkoneksi.php';

if (isset($_POST['submit'])) {
  if ($_POST['submit']) {
   // tangkapa data dari form
    $nama = $_POST['nama'];
    $kec_id = $_POST['kec_id'];
  }

    switch ($_POST['submit']) {
      case 'simpan':
        // proses insert ke database
        try {
         $sql = "INSERT INTO kelurahan (nama, kec_id) VALUES (?,?)";
         $stmt = $db->prepare($sql);
         $stmt->execute([$nama, $kec_id]);
         echo "ok";
         header("Location: list-kelurahan.php");
        } catch (Throwable $e) {
          echo "Eror while insert data kelurahan";
          echo $e;  
        }
        
        break;
        case 'ubah':
          // proses update data
          $id = $_POST['id'];
          try {
           $sql = "UPDATE kelurahan SET nama=?, kec_id=? WHERE id=?";
           $stmt = $db->prepare($sql);
           $stmt->execute([$nama, $kec_id, $id]);
           echo "ok";
           header("Location: list-kelurahan.php");
          } catch (Throwable $e) {
            echo "Eror while update data kelurahan";
            echo $e;  
          }
          
          
          default:
          $id = $_POST['id'];
          try {
           $sql = "DELETE FROM kelurahan WHERE id=?";
           $stmt = $db->prepare($sql);
           $stmt->execute([$id]);
           echo "ok";
           header("Location: list-kelurahan.php");
          } catch (Throwable $e) {
            echo "Eror while delete data kelurahan";
            echo $e;  
          }
      
        break;
    }
    
        
}

