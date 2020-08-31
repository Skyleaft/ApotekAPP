<!-- Modal -->
<div class="modal fade" id="modaledit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Data Pegawai</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?= form_open('obat/updatedata', ['class' => 'formobat']) ?>
            <?= csrf_field(); ?>
            <input style="display: none;;" type="text" id="id" name="id" value="<?= $id  ?>" readonly>
            <div class="modal-body">
                <div class="card-body">
                    <div class="form-group row">
                        <label for="nama" class="col-sm-3 col-form-label">Nama</label>
                        <div class="col-sm-9">
                            <input class="form-control" type="text" id="nama" name="nama" value="<?= $nama  ?>">
                            <div class="invalid-feedback errorNama">
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="satuan" class="col-sm-3 col-form-label">Satuan</label>
                        <div class="col-sm-3">
                            <select class="select2 form-control mb-6 custom-select" style="width: 100%;" id="satuan" name="satuan">
                                <option selected value="">Pilih Satuan</option>
                                <option value="PCS" <?php if ($satuan == 'PCS') echo "selected"  ?>>PCS</option>
                                <option value="BOTOL" <?php if ($satuan == 'BOTOL') echo "selected"  ?>>BOTOL</option>
                                <option value="TUBE" <?php if ($satuan == 'TUBE') echo "selected"  ?>>TUBE</option>
                                <option value="STRIP" <?php if ($satuan == 'STRIP') echo "selected"  ?>>STRIP</option>
                                <option value="TABLET" <?php if ($satuan == 'TABLET') echo "selected"  ?>>TABLET</option>
                                <option value="PACK" <?php if ($satuan == 'PACK') echo "selected"  ?>>PACK</option>
                                <option value="BOX" <?php if ($satuan == 'BOX') echo "selected"  ?>>BOX</option>
                                <option value="CAP" <?php if ($satuan == 'CAP') echo "selected"  ?>>CAP</option>
                                <option value="KAPS" <?php if ($satuan == 'KAPS') echo "selected"  ?>>KAPS</option>
                                <option value="SCT" <?php if ($satuan == 'SCT') echo "selected"  ?>>SCT</option>
                                <option value="POT" <?php if ($satuan == 'POT') echo "selected"  ?>>POT</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="harga" class="col-sm-3 col-form-label">Harga</label>
                        <div class="col-sm-3">
                            <input class="form-control" type="text" id="harga" name="harga" value="<?= $harga  ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="stok" class="col-sm-3 col-form-label">STOK</label>
                        <div class="col-sm-3">
                            <input class="form-control" type="text" id="stok" name="stok" value="<?= $stok  ?>">
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary btn_simpan">Update Data</button>
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
                    $('.btn_simpan').html('Update Data');
                },
                success: function(response) {
                    Swal.fire({
                        icon: 'success',
                        title: 'Berhasil',
                        text: response.sukses,
                    });
                    $('#modaledit').modal('hide');
                    dataobat();
                },

                error: function(xhr, ajaxOptions, thorwnError) {
                    alert(xhr.status + "\n" + xhr.responseText + "\n" + thorwnError);
                }

            });
            return false;
        });
    });
</script>