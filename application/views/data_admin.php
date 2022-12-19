   <!-- Divider -->
    <hr class="sidebar-divider">

            <!-- Begin Page Content -->
            <div class="container-fluid">
                <div class="card mb-3" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="<?= base_url('assets/img/profile/default.jpg'); ?>"
                            class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">NISN : <?= $profile['nisn']; ?></h5>
                                <h5 class="card-text">Nama : <?= $profile['nama']; ?></h5>
                                <h5 class="card-text">Kelas : <?= $profile['kelas']; ?></h5>
                                <h5 class="card-text">Jurusan : <?= $profile['jurusan']; ?></h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->