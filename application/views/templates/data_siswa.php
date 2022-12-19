<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="<?= base_url(); ?>/js/jquery-3.6.0.min.js"></script>
    <meta name="description" content="">
    <meta name="author" content="">

    <title>
        SL - <?= $title; ?>
    </title>

    <!-- Custom fonts for this template-->
    <link href="<?= base_url('assets/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url('assets/'); ?>https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url('assets/'); ?>css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-dark">
    
    <!-- Page Wrapper -->
    <div id="wrapper">
            <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('dashboard'); ?>">
    <div class="sidebar-brand-icon rotate-n-0">
        <i class="fab fa-gg"></i>
    </div>
    <div class="sidebar-brand-text mx-3">Menu</div>
</a>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
    Administrator
</div>

<!-- Nav Item - Dashboard -->
<li class="nav-item">
    <a class="nav-link" href="<?= base_url('dashboard'); ?>">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
</li>
<li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse" 
            aria-expanded="true" aria-controls="collapseTwo">
                <i class="fas fa-fw fa-cog"></i>
                <span>Manage</span>
            </a>
            <div id="collapse" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="<?= base_url('dashboard/admin'); ?>">Data Admin</a>
                    <a class="collapse-item" href="<?= base_url('dashboard/siswa'); ?>">Data Siswa</a>
                </div>
            </div>
        </li>

<!-- Divider -->
<hr class="sidebar-divider">


<li class="nav-item">
    <a class="nav-link" href="<? base_url('auth/logout') ?>" data-toggle="modal" data-target="#logoutModal">
        <i class="fas fa-fw fa-sign-out-alt"></i>
        <span>Log Out</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>

</ul>
<!-- End of Sidebar -->
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Topbar -->
            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                <!-- Sidebar Toggle (Topbar) -->
                <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                    <i class="fa fa-bars"></i>
                </button>

                <!-- Page Heading -->
                <h1 class="h3 mb-1 text-gray-800">Dashboard Admin</h1>

                <!-- Topbar Navbar -->

            </nav>
            <!-- End of Topbar -->
            <!-- Begin Page Content -->


    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- row table-->
    <div class="row">
        <div class="table-responsive table-bordered col-lg ml-5 mr-5 px-5 mt-2">
            <div class="page-header">
                <div class="fa fa-database text-danger mt-2"> Data Siswa</div>
            </div>
            <div class="table-responsive">
                <table class="table mt-3" id="table-datatable">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>NISN</th>
                            <th>Nama</th>
                            <th>Kelas</th>
                            <th>Jurusan</th>
                            <th>Calon</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 1;
                        foreach ($siswa as $s) { ?>
                            <tr>
                                <td><?= $i++; ?></td>
                                <td><?= $s['nisn']; ?></td>
                                <td><?= $s['nama']; ?></td>
                                <td><?= $s['kelas']; ?></td>
                                <td><?= $s['jurusan']; ?></td>
                                <td><div style="text-transform: uppercase"><?= $s['calon']; ?></td>
                                <td>
                                    <a href="<?= base_url('order/ubahOrder/').$s['nisn'];?>" 
                                        class="badge badge-info"><i class="fas fa-edit"></i> Ubah</a>
                                    <a href="<?= base_url('order/hapusOrder/').$s['nisn'];?>" 
                                    onclick="return confirm('Kamu yakin akan menghapus <?= $title.' '.$s['nisn'];?> ?');" 
                                    class="badge badge-danger"><i class="fas fa-trash"></i> Hapus</a>                
                            </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
    <!-- end of row table-->


</div>
<!-- /.container-fluid -->


<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="<?= base_url('auth/logout'); ?>">Logout</a>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="<?= base_url('assets/'); 
?>vendor/jquery/jquery.min.js"></script>
<script src="<?= base_url('assets/'); 
?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="<?= base_url('assets/'); ?>vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="<?= base_url('assets/'); ?>js/sb-admin-2.min.js"></script>

<script>
    $('.custom-file-input').on('change', function() {
        let fileName = $(this).val().split('\\').pop();
        $(this).next('.custom-file-label').addClass("selected").html(fileName);
    });
    $(document).ready(function() {
        $("#table-datatable").dataTable();
    });
    $('.alert-message').alert().delay(3500).slideUp('slow');
</script>

</body>


</html>