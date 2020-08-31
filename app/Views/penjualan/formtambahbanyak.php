<?= form_open('obat/simpanbanyak', ['class' => 'formsimpanbanyak']); ?>
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
            <th>Satuan</th>
            <th>Harga</th>
            <th>Stok</th>
            <th></th>
        </tr>
    </thead>

    <tbody class="formtambah">
        <tr>
            <td>
                <input class="form-control" type="text" id="nama" name="nama[]"></td>
            <td>
                <select class="select2 form-control mb-6 custom-select" style="width: 100%;" id="satuan" name="satuan[]">
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
            </td>
            <td>
                <input class="form-control" type="text" id="harga" name="harga[]">
            </td>
            <td>
                <input class="form-control" type="text" id="stok" name="stok[]">
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
                <select class="select2 form-control mb-6 custom-select" style="width: 100%;" id="satuan" name="satuan[]">
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
            </td>
            <td>
                <input class="form-control" type="text" id="harga" name="harga[]">
            </td>
            <td>
                <input class="form-control" type="text" id="stok" name="stok[]">
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
            dataobat();
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
                                window.location.href = ("<?= site_url('obat/index'); ?>");
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