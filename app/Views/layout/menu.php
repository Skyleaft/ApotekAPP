<?= $this->extend('layout/main') ?>
<?= $this->section('menu') ?>

<ul>
    <li class="menu-title">Main</li>
    <li>
        <a href="<?= site_url('layout/index') ?>" class="waves-effect">
            <i class="mdi mdi-airplay"></i>
            <span> Beranda <span class="badge badge-pill badge-primary float-right">7</span></span>
        </a>
    </li>

    <li class="has_sub">
        <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-layers"></i> <span> Master Data </span> <span class="float-right"><i class="mdi mdi-chevron-right"></i></span></a>
        <ul class="list-unstyled">
            <li><a href="advanced-highlight.html">Data Obat</a></li>
            <li><a href="advanced-rating.html">Data Pegawai</a></li>
            <li><a href="advanced-alertify.html">Data Pelanggan</a></li>
        </ul>
    </li>

</ul>

<?= $this->endSection('') ?>