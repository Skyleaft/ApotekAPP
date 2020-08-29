<?= $this->extend('layout/main') ?>
<?= $this->extend('layout/menu') ?>

<?= $this->section('content') ?>
<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <h4 class="page-title">Selamat Datang di Aplikasi Apotek</h4>
        </div>
    </div>
</div>

<div class="row">
    <!-- Column -->
    <div class="col-md-6 col-lg-6 col-xl-3">
        <div class="card m-b-30">
            <div class="card-body">
                <div class="d-flex flex-row">
                    <div class="col-3 align-self-center">
                        <div class="round">
                            <i class="mdi mdi-webcam"></i>
                        </div>
                    </div>
                    <div class="col-9 align-self-center text-center">
                        <div class="m-l-10">
                            <h5 class="mt-0 round-inner">278</h5>
                            <p class="mb-0 text-muted">Total Produk</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Column -->
    <!-- Column -->
    <div class="col-md-6 col-lg-6 col-xl-3">
        <div class="card m-b-30">
            <div class="card-body">
                <div class="d-flex flex-row">
                    <div class="col-3 align-self-center">
                        <div class="round">
                            <i class="mdi mdi-account-multiple-plus"></i>
                        </div>
                    </div>
                    <div class="col-9 text-center align-self-center">
                        <div class="m-l-10 ">
                            <h5 class="mt-0 round-inner">14</h5>
                            <p class="mb-0 text-muted">Total Pegawai</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Column -->
    <!-- Column -->
    <div class="col-md-6 col-lg-6 col-xl-3">
        <div class="card m-b-30">
            <div class="card-body">
                <div class="d-flex flex-row">
                    <div class="col-3 align-self-center">
                        <div class="round ">
                            <i class="mdi mdi-basket"></i>
                        </div>
                    </div>
                    <div class="col-9 align-self-center text-center">
                        <div class="m-l-10 ">
                            <h5 class="mt-0 round-inner">720</h5>
                            <p class="mb-0 text-muted">Pesanan</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Column -->
    <!-- Column -->
    <div class="col-md-6 col-lg-6 col-xl-3">
        <div class="card m-b-30">
            <div class="card-body">
                <div class="d-flex flex-row">
                    <div class="col-3 align-self-center">
                        <div class="round">
                            <i class="mdi mdi-rocket"></i>
                        </div>
                    </div>
                    <div class="col-9 align-self-center text-center">
                        <div class="m-l-6">
                            <h5 class="mt-0 round-inner">Rp.300.000,00</h5>
                            <p class="mb-0 text-muted">Total Penjualan</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Column -->
</div>

<?= $this->endSection('') ?>