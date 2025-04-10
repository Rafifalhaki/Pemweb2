<?php
$title = "Dashbord - Nawaf";

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
                    <h1 class="h3 mb-4 text-gray-800">Tugas Pemerograma Web2</h1>

                    <div class="crad">
                        <div class="card-header">
                            <h4 class="card-title">Di buat</h4>
                        </div>
                        <div class="card-body">
                           <p class="card-title">Nama : Nawaf Rafif Alhakim</p>
                           <p class="card-text">NIM : 0110124197</p>
                        </div>
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

       