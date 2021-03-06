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
            <?= form_open('pegawai/updatedata', ['class' => 'formpegawai']) ?>
            <?= csrf_field(); ?>
            <input style="display: none;;" type="text" id="id" name="id" value="<?= $id  ?>" readonly>
            <div class="modal-body">
                <div class="card-body">
                    <div class="form-group row">
                        <label for="ktp" class="col-sm-3 col-form-label">Nomor KTP</label>
                        <div class="col-sm-9">
                            <input class="form-control" type="text" id="ktp" name="ktp" value="<?= $no_ktp  ?>" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nama" class="col-sm-3 col-form-label">Nama</label>
                        <div class="col-sm-9">
                            <input class="form-control" type="text" id="nama" name="nama" value="<?= $nama  ?>">
                            <div class="invalid-feedback errorNama">
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="jk" class="col-sm-3 col-form-label">Jenis Kelamin</label>
                        <div class="col-sm-4">
                            <select class="select2 form-control mb-6 custom-select" style="width: 100%;" id="jk" name="jk">
                                <option value="">Pilih Jenis Kelamin</option>
                                <option value="L" <?php if ($jk == 'L') echo "selected"  ?>>Laki - Laki</option>
                                <option value="P" <?php if ($jk == 'P') echo "selected"  ?>>Perempuan</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="datepicker-autoclose" class="col-sm-3 col-form-label">Tanggal Lahir</label>
                        <div class="col-sm-4">
                            <div class="input-group">
                                <input type="date" class="form-control" placeholder="dd/mm/yyyy" id="datepicker-autoclose" name="tgl_lahir" value="<?= $tgl_lahir  ?>">
                            </div><!-- input-group -->
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="alamat" class="col-sm-3 col-form-label">Alamat</label>
                        <div class="col-sm-9">
                            <input class="form-control" type="text" id="alamat" name="alamat" value="<?= $alamat  ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="no_telp" class="col-sm-3 col-form-label">Nomor Telepon</label>
                        <div class="col-sm-9">
                            <input class="form-control" type="text" id="no_telp" name="no_telp" value="<?= $no_telp  ?>">
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
        $('.formpegawai').submit(function(e) {
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
                    $('.btn_simpan').html('Update');
                },
                success: function(response) {
                    Swal.fire({
                        icon: 'success',
                        title: 'Berhasil',
                        text: response.sukses,
                    })
                    $('#modaledit').modal('hide');
                    datapegawai();
                },

                error: function(xhr, ajaxOptions, thorwnError) {
                    alert(xhr.status + "\n" + xhr.responseText + "\n" + thorwnError);
                }

            });
            return false;
        })
    });
</script>