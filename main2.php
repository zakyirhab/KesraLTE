<?php
//memulai session yang disimpan pada browser
include "config/koneksi.php";
session_start();

//cek apakah sesuai status sudah login? kalau belum akan kembali ke form login
if ($_SESSION['status'] != "sudah_login") {
    //melakukan pengalihan
    header("location:index.php");
}
// var_dump($_SESSION['status']);
// return;
global $mysqli;

$sql = $mysqli->query("SELECT COUNT(id_lansia) as lansia  from datalansia");
while ($data = $sql->fetch_assoc()) {
    $lansia = $data['lansia'];
}
$sql = $mysqli->query("SELECT COUNT(id_paca) as paca  from datapaca");
while ($data = $sql->fetch_assoc()) {
    $paca = $data['paca'];
}
$sql = $mysqli->query("SELECT COUNT(id_yatim) as yatim  from datayatim");
while ($data = $sql->fetch_assoc()) {
    $yatim = $data['yatim'];
}
$sql = $mysqli->query("SELECT COUNT(id_csr) as csr  from datacsr");
while ($data = $sql->fetch_assoc()) {
    $csr = $data['csr'];
}
$sql = $mysqli->query("SELECT COUNT(id_sempemkot) as sempemkot  from datasempemkot");
while ($data = $sql->fetch_assoc()) {
    $sempemkot = $data['sempemkot'];
}
$sql = $mysqli->query("SELECT COUNT(id_balita) as balita  from databalita");
while ($data = $sql->fetch_assoc()) {
    $balita = $data['balita'];
}
$sql = $mysqli->query("SELECT COUNT(id_blt) as blt  from datablt");
while ($data = $sql->fetch_assoc()) {
    $blt = $data['blt'];
}
$sql = $mysqli->query("SELECT COUNT(id_bpjs) as bpjs  from databpjs");
while ($data = $sql->fetch_assoc()) {
    $bpjs = $data['bpjs'];
}
// $sql = $mysqli->query("SELECT COUNT(id_mbr) as mbr  from datambr");
// while ($data = $sql->fetch_assoc()) {
//     $mbr = $data['mbr'];
// }
$sql = $mysqli->query("SELECT COUNT(id_posyandu) as posyandu  from dataposyandu");
while ($data = $sql->fetch_assoc()) {
    $posyandu = $data['posyandu'];
}
$sql = $mysqli->query("SELECT COUNT(id_nib) as nib  from datanib");
while ($data = $sql->fetch_assoc()) {
    $nib = $data['nib'];
}
$sql = $mysqli->query("SELECT COUNT(id_nonbinaan) as nonbinaan  from datanonbinaan");
while ($data = $sql->fetch_assoc()) {
    $nonbinaan = $data['nonbinaan'];
}
$sql = $mysqli->query("SELECT COUNT(id_peken) as peken  from datapeken");
while ($data = $sql->fetch_assoc()) {
    $peken = $data['peken'];
}
$sql = $mysqli->query("SELECT COUNT(id_gamis) as gamis  from datagamis");
while ($data = $sql->fetch_assoc()) {
    $gamis = $data['gamis'];
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>KesraLTE</title>

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="logout.php" class="nav-link">
                        Logout
                        <i class="fas fa-sign-out-alt"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="main2.php" class="brand-link">
                <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">KesraLTE </span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="dist/img/userkesra1.jpg" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">Kesra Kelurahan</a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-copy"></i>
                                <p>
                                    Permakanan
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="main.php?page=data_lansia" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Data Lansia</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="main.php?page=data_paca" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Data Paca</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="main.php?page=data_yatim" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Data Yatim</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-chart-pie"></i>
                                <p>
                                    Sembako
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="main.php?page=data_csr" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>CSR</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="main.php?page=data_sempemkot" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Pemkot</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-chart-pie"></i>
                                <p>
                                    UMKM
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="main.php?page=data_umkm" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>NIB</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="main.php?page=data_peken" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>E-PEKEN</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="main.php?page=data_nonbinaan" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Non Binaan</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="main.php?page=data_gamis" class="nav-link">
                                <i class="nav-icon fas fa-calendar-alt"></i>
                                <p>
                                    Gamis
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="main.php?page=data_blt" class="nav-link">
                                <i class="nav-icon fas fa-calendar-alt"></i>
                                <p>
                                    BLT
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="main.php?page=data_bpjs" class="nav-link">
                                <i class="nav-icon fas fa-calendar-alt"></i>
                                <p>
                                    BPJS
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="main.php?page=data_balita" class="nav-link">
                                <i class="nav-icon fas fa-calendar-alt"></i>
                                <p>
                                    Poskeskel
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="main.php?page=data_posyandu" class="nav-link">
                                <i class="nav-icon fas fa-calendar-alt"></i>
                                <p>
                                    Posyandu
                                </p>
                            </a>
                        </li>


                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-3 col-6">
                        <!-- small card -->
                        <div class="small-box bg-info">
                            <div class="inner">
                                <h3>
                                    <?php echo $lansia; ?>
                                </h3>

                                <p>Permakanan - Lansia</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-users"></i>
                            </div>
                            <a href="main.php?page=data_lansia" class="small-box-footer">
                                More info <i class="fas fa-arrow-circle-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <!-- small card -->
                        <div class="small-box bg-info">
                            <div class="inner">
                                <h3>
                                    <?php echo $paca; ?>
                                </h3>
                                <p>Permakanan - Paca</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-users"></i>
                            </div>
                            <a href="main.php?page=data_paca" class="small-box-footer">
                                More info <i class="fas fa-arrow-circle-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <!-- small card -->
                        <div class="small-box bg-info">
                            <div class="inner">
                                <h3>
                                    <?php echo $yatim; ?>
                                </h3>
                                <p>Permakanan - Yatim</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-users"></i>
                            </div>
                            <a href="main.php?page=data_yatim" class="small-box-footer">
                                More info <i class="fas fa-arrow-circle-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <!-- small card -->
                        <div class="small-box bg-info">
                            <div class="inner">
                                <h3>
                                    <?php echo $csr; ?>
                                </h3>
                                <p>Sembako - CSR</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-users"></i>
                            </div>
                            <a href="main.php?page=data_csr" class="small-box-footer">
                                More info <i class="fas fa-arrow-circle-right"></i>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-6">
                        <!-- small card -->
                        <div class="small-box bg-info">
                            <div class="inner">
                                <h3>
                                    <?php echo $sempemkot; ?>
                                </h3>

                                <p>Sembako - Pemkot</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-users"></i>
                            </div>
                            <a href="main.php?page=data_sempemkot" class="small-box-footer">
                                More info <i class="fas fa-arrow-circle-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <!-- small card -->
                        <div class="small-box bg-info">
                            <div class="inner">
                                <h3>
                                    <?php echo $nib; ?>
                                </h3>

                                <p>UMKM - Data NIB</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-users"></i>
                            </div>
                            <a href="main.php?page=data_umkm" class="small-box-footer">
                                More info <i class="fas fa-arrow-circle-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <!-- small card -->
                        <div class="small-box bg-info">
                            <div class="inner">
                                <h3>
                                    <?php echo $peken; ?>
                                </h3>

                                <p>UMKM - Data E-PEKEN</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-users"></i>
                            </div>
                            <a href="main.php?page=data_peken" class="small-box-footer">
                                More info <i class="fas fa-arrow-circle-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <!-- small card -->
                        <div class="small-box bg-info">
                            <div class="inner">
                                <h3>
                                    <?php echo $nonbinaan; ?>
                                </h3>

                                <p>UMKM - Non Binaan</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-users"></i>
                            </div>
                            <a href="main.php?page=data_nonbinaan" class="small-box-footer">
                                More info <i class="fas fa-arrow-circle-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <!-- small card -->
                        <div class="small-box bg-info">
                            <div class="inner">
                                <h3>
                                    <?php echo $gamis; ?>
                                </h3>

                                <p>Data Gamis</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-users"></i>
                            </div>
                            <a href="main.php?page=data_nonbinaan" class="small-box-footer">
                                More info <i class="fas fa-arrow-circle-right"></i>
                            </a>
                        </div>
                    </div>
                    <!-- <div class="col-lg-3 col-6">
                       
                        <div class="small-box bg-info">
                            <div class="inner">
                                <h3>
                                   
                                </h3>
                                <p>Data MBR</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-users"></i>
                            </div>
                            <a href="main.php?page=data_mbr" class="small-box-footer">
                                More info <i class="fas fa-arrow-circle-right"></i>
                            </a>
                        </div>
                    </div> -->
                    <div class="col-lg-3 col-6">
                        <!-- small card -->
                        <div class="small-box bg-info">
                            <div class="inner">
                                <h3>
                                    <?php echo $blt; ?>
                                </h3>
                                <p>Data BLT</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-users"></i>
                            </div>
                            <a href="main.php?page=data_blt" class="small-box-footer">
                                More info <i class="fas fa-arrow-circle-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <!-- small card -->
                        <div class="small-box bg-info">
                            <div class="inner">
                                <h3>
                                    <?php echo $bpjs; ?>
                                </h3>

                                <p>Data BPJS</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-users"></i>
                            </div>
                            <a href="main.php?page=data_bpjs" class="small-box-footer">
                                More info <i class="fas fa-arrow-circle-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <!-- small card -->
                        <div class="small-box bg-info">
                            <div class="inner">
                                <h3>
                                    <?php echo $balita; ?>
                                </h3>
                                <p>Data Poskeskel</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-users"></i>
                            </div>
                            <a href="main.php?page=data_poskeskel" class="small-box-footer">
                                More info <i class="fas fa-arrow-circle-right"></i>
                            </a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                        <!-- small card -->
                        <div class="small-box bg-info">
                            <div class="inner">
                                <h3>
                                    <?php echo $posyandu; ?>
                                </h3>
                                <p>Data Posyandu</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-users"></i>
                            </div>
                            <a href="main.php?page=data_posyandu" class="small-box-footer">
                                More info <i class="fas fa-arrow-circle-right"></i>
                            </a>
                        </div>
                    </div>
                    <!-- ./col -->
                </div>
            </div>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->

        <!-- Main Footer -->
        <footer class="main-footer">
            <strong>Copyright &copy; 2022 Moh Dzaky Irhab.</strong>
            All rights reserved.
        </footer>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->
    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.js"></script>

    <!-- OPTIONAL SCRIPTS -->
    <script src="dist/js/demo.js"></script>

    <!-- PAGE PLUGINS -->
    <!-- jQuery Mapael -->
    <script src="plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
    <script src="plugins/raphael/raphael.min.js"></script>
    <script src="plugins/jquery-mapael/jquery.mapael.min.js"></script>
    <script src="plugins/jquery-mapael/maps/usa_states.min.js"></script>
    <!-- ChartJS -->
    <script src="plugins/chart.js/Chart.min.js"></script>

    <!-- PAGE SCRIPTS -->
    <script src="dist/js/pages/dashboard2.js"></script>
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- DataTables -->
    <script src="plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js"></script>
    <!-- page script -->
    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "autoWidth": false,
            });
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>
</body>

</html>