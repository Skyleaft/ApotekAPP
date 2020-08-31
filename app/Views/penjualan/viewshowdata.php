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
            <h4 class="page-title">Data Penjualan</h4>
        </div>
    </div>
</div>

<div class="col-sm-12">
    <div class="card m-b-30">
        <div class="card-body table-responsive">
            <div class="card-title">
                <button class="btn btn-primary btn-sm tambah">
                    <i class="fas fa-plus-circle"></i> Tambah Produk
                </button>
            </div>
            <p class="card-text viewdata">

            </p>
        </div>
    </div>
</div>

<div class="viewmodal" style="display: none;"></div>
</div>
</div>

<script type="text/javascript">
    function datakeranjang() {
        $.ajax({
            url: "<?= site_url('penjualan/ambildata') ?>",
            dataType: "json",
            success: function(response) {
                $('.viewdata').html(response.data);
            },
            error: function(xhr, ajaxOptions, thorwnError) {
                alert(xhr.status + "\n" + xhr.responseText + "\n" + thorwnError);
            },
        });
    }

    $(document).ready(function() {
        datakeranjang();

        $('.tambah').click(function(e) {
            $.ajax({
                url: "<?= site_url('penjualan/formtambah') ?>",
                dataType: "json",
                success: function(response) {
                    $('.viewmodal').html(response.data).show();

                    $('#modaltambah').modal('show');
                },
                error: function(xhr, ajaxOptions, thorwnError) {
                    alert(xhr.status + "\n" + xhr.responseText + "\n" + thorwnError);
                }
            });
        });

    });
</script>

<?= $this->endSection('') ?>