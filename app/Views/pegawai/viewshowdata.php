<?= $this->extend('layout/main') ?>
<?= $this->extend('layout/menu') ?>
<?= $this->section('content') ?>

<!-- DataTables -->
<link href="<?= base_url() ?>/assets/plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
<link href="<?= base_url() ?>/assets/plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
<!-- Required datatable js -->
<script src="<?= base_url() ?>/assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url() ?>/assets/plugins/datatables/dataTables.bootstrap4.min.js"></script>


<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <h4 class="page-title">Data Pegawai</h4>
        </div>
    </div>
</div>

<div class="col-sm-12">
    <div class="card m-b-30">
        <div class="card-body table-responsive">
            <p class="card-text">
                <table class="table" id="datapegawai">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nomor KTP</th>
                            <th>Nama</th>
                            <th>Jenis Kelamin</th>
                            <th>Tanggal Lahir</th>
                            <th>Alamat</th>
                            <th>No.Telepon</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php $nomor = 0;
                        foreach ($showdata as $row) :
                            $nomor++;
                        ?>
                            <tr>
                                <td><?= $nomor ?></td>
                                <td><?= $row['no_ktp'] ?></td>
                                <td><?= $row['nama'] ?></td>
                                <td><?= $row['jenis_kelamin'] ?></td>
                                <td><?= $row['tgl_lahir'] ?></td>
                                <td><?= $row['alamat'] ?></td>
                                <td><?= $row['no_telp'] ?></td>
                            </tr>

                        <?php endforeach; ?>
                    </tbody>
                </table>
        </div>
    </div>
</div>
</div>
</div>

<script type="text/javascript">
    $(document).ready(function() {
        $('#datapegawai').DataTable();
    });
</script>

<?= $this->endSection('') ?>