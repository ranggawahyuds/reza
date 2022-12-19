<!-- Begin Page Content -->
<div class="container-fluid">
    <?= $this->session->flashdata('message'); ?>
    <div class="row">
        <div class="col-lg-6">
            <?php if (validation_errors()) { ?>
                <div class="alert alert-danger" role="alert">
                    <?= validation_errors(); ?>
                </div>
            <?php } ?>
            <?= $this->session->flashdata('message'); ?>
            <?php foreach ($ubah as $b) { ?>
                <form action="<?= base_url('dashboard/ubahData'); ?>" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Nisn</label>
                        <input type="hidden" name="nisn" id="nisn" value="<?php echo $b['nisn']; ?>">
                        <input type="text" class="form-control form-control-user" id="judul_buku" name="nisn" 
                        placeholder="-" value="<?= $b['nisn']; ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label>Nama Lengkap</label>
                        <input type="text" class="form-control form-control-user" id="nama" name="nama" 
                        placeholder="Masukkan Nama Lengkap" value="<?= $b['nama']; ?>">
                    </div>
                    <div class="form-group">
                        <label>Kelas</label>
                        <input type="text" class="form-control form-control-user" id=" kelas" name="kelas" 
                        placeholder="Kelas" value="<?= $b['kelas']; ?>">
                    </div>
                    <div class="form-group">
                        <select class="form-control form-control-user" name="jurusan" id="jurusan" required> 
                            <option value="">--->Jurusan<---</option>
                            <option value="ipa">IPA</option>
                            <option value="ips">IPS</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <select class="form-control form-control-user" name="calon" id="calon" required> 
                            <option value="">---->Calon<----</option>
                            <option value="joko & wati">Joko & Wati</option>
                            <option value="saipul & jaenab">Saipul & Jaenab</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="button" class="form-control form-control-user btn btn-dark col-lg-3 mt-3" 
                        value="Kembali" onclick="window.history.go(-1)">
                        <input type="submit" class="form-control form-control-user btn btn-primary col-lg-3 mt-3" 
                        value="Update">
                    </div>
                </form>
            <?php } ?>
        </div>
    </div>
</div>
</div>