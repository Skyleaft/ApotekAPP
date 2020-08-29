<?= $this->extend('layout/main') ?>
<?= $this->section('menu') ?>

<ul>
    <li class="menu-title">Main</li>
    <li>
        <a href="<?= site_url('layout/index') ?>" class="waves-effect">
            <i class="mdi mdi-airplay"></i>
            <span> Beranda</span>
        </a>
    </li>

    <li class="has_sub">
        <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-layers"></i> <span> Master Data </span> <span class="float-right"><i class="mdi mdi-chevron-right"></i></span></a>
        <ul class="list-unstyled">
            <li><a href="<?= site_url('obat/index') ?>">Data Obat</a></li>
            <li><a href="<?= site_url('pegawai/index') ?>">Data Pegawai</a></li>
            <li><a href="<?= site_url('pelanggan/index') ?>">Data Pelanggan</a></li>
        </ul>
    </li>

    <li class="menu-title">Transaksi</li>
    <li>
        <a href="<?= site_url('penjualan/index') ?>" class="waves-effect">
            <i class="mdi mdi-airplay"></i>
            <span> Penjualan Obat </span>
        </a>
    </li>
    <li>
        <a href="<?= site_url('pembelian/index') ?>" class="waves-effect">
            <i class="mdi mdi-airplay"></i>
            <span> Pembelian Obat </span>
        </a>
    </li>


</ul>

<?= $this->endSection('') ?>