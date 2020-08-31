<!-- Modal -->
<div class="modal fade" id="modaltambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data Obat</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?= form_open('obat/simpandata', ['class' => 'formobat']) ?>
            <?= csrf_field(); ?>
            <div class="modal-body">
                <div class="card-body">
                    <div class="form-group row">
                        <label for="nama" class="col-sm-3 col-form-label">Nama</label>
                        <div class="col-sm-9">
                            <input class="form-control" type="text" id="nama" name="nama">
                            <div class="invalid-feedback errorNama">
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="satuan" class="col-sm-3 col-form-label">Satuan</label>
                        <div class="col-sm-3">
                            <select class="select2 form-control mb-6 custom-select" style="width: 100%;" id="satuan" name="satuan">
                                <option selected value="">Pilih Satuan</option>
                                <option value="PCS">PCS</option>
                                <option value="BOTOL">BOTOL</option>
                                <option value="TUBE">TUBE</option>
                                <option value="STRIP">STRIP</option>
                                <option value="TABLET">TABLET</option>
                                <option value="PACK">PACK</option>
                                <option value="BOX">BOX</option>
                                <option value="CAP">CAP</option>
                                <option value="KAPS">KAPS</option>
                                <option value="SCT">SCT</option>
                                <option value="POT">POT</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="harga" class="col-sm-3 col-form-label">Harga</label>
                        <div class="col-sm-3">
                            <input class="form-control" type="text" id="harga" name="harga">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="stok" class="col-sm-3 col-form-label">STOK</label>
                        <div class="col-sm-3">
                            <input class="form-control" type="text" id="stok" name="stok">
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary btn_simpan">Simpan Data</button>
            </div>

            <? form_close() ?>
        </div>
    </div>
</div>



<script>
    $(document).ready(function() {
        $('.formobat').submit(function(e) {
            e.preventDefault();
            $.ajax({
                type: "post",
                url: $(this).attr('action'),
                data: $(this).serialize(),
                dataType: "json",
                beforeSend: function() {
                    $('.btn_simpan').attr('disable', 'disabled');
                    $('.btn_simpan').html('<i class="fa fa-spin fa-spinner"></i>');
                },
                complete: function() {
                    $('.btn_simpan').removeAttr('disable');
                    $('.btn_simpan').html('Simpan Data');
                },
                success: function(response) {
                    if (response.error) {
                        if (response.error.nama) {
                            $('#nama').addClass('is-invalid');
                            $('.errorNama').html(response.error.nama);
                        } else {
                            $('#nama').removeClass('is-invalid');
                            $('.errorNama').html('');
                        }
                    } else {
                        Swal.fire({
                            icon: 'success',
                            title: 'Berhasil',
                            text: response.sukses,
                        })
                        $('#modaltambah').modal('hide');
                        dataobat();
                    }
                },

                error: function(xhr, ajaxOptions, thorwnError) {
                    alert(xhr.status + "\n" + xhr.responseText + "\n" + thorwnError);
                }

            });
            return false;
        })
    });
</script>