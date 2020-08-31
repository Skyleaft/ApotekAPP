<?= form_open('pelanggan/simpanbanyak', ['class' => 'formsimpanbanyak']); ?>
<?= csrf_field(); ?>
<p class="mb-2">
    <button type="button" class="btn btn-warning btnback ">
        Kembali
    </button>
    <button type="submit" class="btn btn-primary btn_simpan ">
        Simpan Banyak
    </button>
</p>
<table class=" table">
    <thead>
        <tr>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Tanggal Lahir</th>
            <th>Alamat</th>
            <th>No.Telepon</th>
            <th></th>
        </tr>
    </thead>

    <tbody class="formtambah">
        <tr>
            <td>
                <input class="form-control" type="text" id="nama" name="nama[]"></td>
            <td>
                <select class="select2 form-control mb-6 custom-select" style="width: 100%;" id="jk" name="jk[]">
                    <option selected value="">Pilih Jenis Kelamin</option>
                    <option value="L">Laki - Laki</option>
                    <option value="P">Perempuan</option>
                </select>
            </td>
            <td>
                <input type="date" class="form-control" placeholder="dd/mm/yyyy" id="datepicker-autoclose" name="tgl_lahir[]">
            </td>
            <td>
                <input class="form-control" type="text" id="alamat" name="alamat[]">
            </td>
            <td>
                <input class="form-control" type="text" id="no_telp" name="no_telp[]">
            </td>
            <td>
                <button type="button" class="btn btn-primary btnaddform">
                    <i class="fa fa-plus"></i>
                </button>
            </td>
        </tr>

    </tbody>
</table>

<?= form_close() ?>

<script>
    $(document).ready(function() {
        $('.btnaddform').click(function(e) {
            e.preventDefault();

            $('.formtambah').append(`
            <tr>
            <td>
                <input class="form-control" type="text" id="nama" name="nama[]"></td>
            <td>
                <select class="select2 form-control mb-6 custom-select" style="width: 100%;" id="jk" name="jk[]">
                    <option selected value="">Pilih Jenis Kelamin</option>
                    <option value="L">Laki - Laki</option>
                    <option value="P">Perempuan</option>
                </select>
            </td>
            <td>
                <input type="date" class="form-control" placeholder="dd/mm/yyyy" id="datepicker-autoclose" name="tgl_lahir[]">
            </td>
            <td>
                <input class="form-control" type="text" id="alamat" name="alamat[]">
            </td>
            <td>
                <input class="form-control" type="text" id="no_telp" name="no_telp[]">
            </td>
            <td>
                <button type="button" class="btn btn-primary btnaddform">
                    <i class="fa fa-plus"></i>
                </button>
            </td>
        </tr>
            `);
        });

        $('.btnback').click(function(e) {
            e.preventDefault();
            datapelanggan();
        });

        $('.formsimpanbanyak').submit(function(e) {
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
                    $('.btn_simpan').html('Simpan');
                },
                success: function(response) {
                    if (response.sukses) {
                        Swal.fire({
                            icon: 'success',
                            title: 'Berhasil',
                            text: `${response.sukses}`,
                        }).then((result) => {
                            if (result.value) {
                                window.location.href = ("<?= site_url('pelanggan/index'); ?>");
                            }
                        });
                    }
                },
                error: function(xhr, ajaxOptions, thorwnError) {
                    alert(xhr.status + "\n" + xhr.responseText + "\n" + thorwnError);
                }

            });
            return false;
        });

    });

    $(document).on('click', '.btnhapus', function(e) {
        e.preventDefault();
        $(this).parents('tr').remove();

    });
</script>