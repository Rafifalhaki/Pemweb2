<?php
require './dbkoneksi.php';

// tankap parameter id 
$id = $_GET['id'];
if ($id) {
// query  database
$query = $db->query("SELECT * FROM kelurahan WHERE id=$id");
$kelurahan = $query->fetch();
}

$proses = $id ? "ubah" : "simpan";


require_once './template/top.php';

?>

        <!-- Sidebar -->
<?php 
require_once './template/sidebar.php';
?>         
    
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php 
                require_once './template/topbar.php';
                ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Tambah Kelurahan</h1>

                    <!-- form tambah kelurahan -->
                        
                    <form action="proses-kelurahan.php" method="post">
                        <?php
                        if ($id) :
                        ?>
                       <input type="hidden" name="id" value="<?= $id ?>">
                       <?php 
                       endif;
                       ?>
                        <div class="form-group row">
                            <label for="kec_id" class="col-4 col-form-label">Kecamatan ID</label> 
                            <div class="col-8">
                            <input id="kec_id" name="kec_id" type="number" min="1" required="required" class="form-control" value="<?= $kelurahan['kec_id'] ?>">
                            </div>
                        </div> 
                        <div class="form-group row">
                            <label for="nama" class="col-4 col-form-label">Nama</label> 
                            <div class="col-8">
                            <input id="nama" name="nama" type="text" required="required" class="form-control"  value="<?= $kelurahan['nama'] ?>">
                            </div>
                        </div> 
                        <div class="form-group row">
                            <div class="offset-4 col-8">
                            <input name="submit" type="submit" class="btn btn-primary" value="<?= $proses ?>">
                            </div>
                        </div>
                    </form>

                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
             <?php
             require_once './template/footer.php';
             ?>
           
            <!-- End of Footer -->

<?php 
require_once './template/bottom.php';
?>

       