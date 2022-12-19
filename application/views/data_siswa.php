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
                                <td><div style="text-transform: uppercase"><?= $s['jurusan']; ?></td>
                                <td><div style="text-transform: uppercase"><?= $s['calon']; ?></td>
                                <td>
                                    <a href="<?= base_url('dashboard/ubahData/').$s['nisn'];?>" 
                                        class="badge badge-info"><i class="fas fa-edit"></i> Ubah</a>
                                    <a href="<?= base_url('dashboard/hapusData/').$s['nisn'];?>" 
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