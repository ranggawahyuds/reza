<!-- Divider -->
<hr class="sidebar-divider">

<div class="row">
    <div class="col-xl-3 col-md-6 mb-4 mx-auto pl-5">
        <div class="card border-danger shadow h-100 py-2">
            <div class="card-body">
                <h5 align="center" class="h4 mb-0 font-weight-bold text-gray-800">JOKO & WATI</h5>
                <p align="center" class="h7 mb-3 font-weight-bold text-gray-800">Jumlah Suara</p>
                <div align="center" class="h1 mb-0 font-weight-bold text-gray-800">
                    <?= $this->ModelAdmin->siswaWhere(['calon' => 'joko & wati'])->num_rows(); ?>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6 mb-4 mx-auto pl-5">
        <div class="card border-danger shadow h-100 py-2">
            <div class="card-body">

                <h5 align="center" class="h4 mb-0 font-weight-bold text-gray-800">SAIPUL & JAENAB</h5>
                <p align="center" class="h7 mb-3 font-weight-bold text-gray-800">Jumlah Suara</p>
                <div align="center" class="h1 mb-0 font-weight-bold text-gray-800">
                    <?= $this->ModelAdmin->siswaWhere(['calon' => 'saipul & jaenab'])->num_rows(); ?>
                </div>
            </div>
        </div>
    </div>
</div>
</div>