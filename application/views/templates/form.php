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

<body class="bg-gray-100">
    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5 col-lg-7 mx-auto">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">PEMILIHAN OSIS</h1>
                            </div>
                            <?= $this->session->flashdata('message'); ?>
                            <form class="siswa" method="post" action="<?= base_url('auth/siswa'); ?>" 
                                enctype="multipart/form-data">
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="nama" name="nama" 
                                    placeholder="Nama Siswa" value="<?= set_value('nama'); ?>">
                                    <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="nisn" 
                                    name="nisn" placeholder="Nisn" value="<?= set_value('nisn'); ?>">
                                    <?= form_error('nisn', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="kelas" name="kelas" 
                                    placeholder="Kelas" value="<?= set_value('kelas'); ?>">
                                    <?= form_error('kelas', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <select class="form-control form-control-user" name="jurusan" id="jurusan"> 
                                        <option value="">--->Jurusan<---</option>
                                        <option value="ipa">IPA</option>
                                        <option value="ips">IPS</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <select class="form-control form-control-user" name="calon" id="calon"> 
                                        <option value="">---->Calon<----</option>
                                        <option value="joko & wati">Joko & Wati</option>
                                        <option value="saipul & jaenab">Saipul & Jaenab</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary btn-user btn-block">
                                    Selesai
                                </button>
                            </form>

                        </div>
                    </div>
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