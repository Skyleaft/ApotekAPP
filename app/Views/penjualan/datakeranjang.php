<?= form_open('penjualan/hapusbanyak', ['class' => 'formhapusbanyak']); ?>
<?= csrf_field(); ?>
<button type="submit" class="btn btn-danger btnhapus mb-3">
    <i class="fas fa-trash"></i> Hapus Banyak Data
</button>

<table class="table" id="datapenjualan">
    <thead>
        <tr>
            <th style="display: none;"></th>
            <th>
                <input type="checkbox" id="centangSemua">
            </th>
            <th>No</th>
            <th>Nama Obat</th>
            <th>Jumlah</th>
            <th>Harga</th>
            <th>Sub Total</th>
            <th>Aksi</th>
        </tr>
    </thead>

    <tbody>
        <?php $nomor = 0;
        foreach ($showdata as $row) :
            $nomor++;
        ?>
            <tr>
                <td style="display: none;"><?= $row['no_struk'] ?></td>
                <td>
                    <input type="checkbox" id="centangid" name="id[]" class="centangid" value="<?= $row['no_struk'] ?>">
                </td>
                <td><?= $nomor ?></td>
                <td><?= $row['nama'] ?></td>
                <td><?= $row['qty'] ?></td>
                <td><?= $row['harga'] ?></td>
                <td><?= $row['sub_total'] ?></td>
                <td>
                    <button type="button" class="btn btn-danger btn-sm" onclick="hapus('<?= $row['no_struk'] ?>')">
                        <i class="fa fa-trash"></i>
                    </button>
                </td>
            </tr>

        <?php endforeach; ?>
    </tbody>
</table>

<?= form_close() ?>

<script type="text/javascript">
    $(document).ready(function() {
        $('#datapenjualan').DataTable();

        $('#centangSemua').click(function(e) {
            if ($(this).is(':checked')) {
                $('.centangid').prop('checked', true);
            } else {
                $('.centangid').prop('checked', false);
            }
        });

        $('.formhapusbanyak').submit(function(e) {
            e.preventDefault();
            let jmldata = $('.centangid:checked');

            if (jmldata.length === 0) {
                Swal.fire({
                    icon: 'error',
                    title: 'Perhatian',
                    text: 'Maaf Silahkan pilih data yang mau dihapus',
                });
            } else {
                Swal.fire({
                    title: 'Yakin mau dihapus?',
                    text: `${jmldata.length} Data akan dihapus!!`,
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#d33',
                    cancelButtonColor: '#3085d6',
                    confirmButtonText: 'Ya'
                }).then((result) => {
                    if (result.value) {
                        $.ajax({
                            type: "post",
                            url: $(this).attr('action'),
                            data: $(this).serialize(),
                            dataType: "json",
                            success: function(response) {
                                if (response.sukses) {
                                    Swal.fire({
                                        icon: 'success',
                                        title: 'Berhasil',
                                        text: response.sukses,
                                    });
                                    datapenjualan();
                                }
                            },
                            error: function(xhr, ajaxOptions, thorwnError) {
                                alert(xhr.status + "\n" + xhr.responseText + "\n" + thorwnError);
                            }
                        });
                    }
                })
            }

            return false;
        });
    });

<<<<<<< HEAD
    function edit(id) {
        $.ajax({
            type: "post",
            url: "<?= site_url('penjualan/formedit') ?>",
            data: {
                id: id
            },
            dataType: "json",
            success: function(response) {
                if (response.sukses) {
                    $('.viewmodal').html(response.sukses).show();
                    $('#modaledit').modal('show');
                }
            },
            error: function(xhr, ajaxOptions, thorwnError) {
                alert(xhr.status + "\n" + xhr.responseText + "\n" + thorwnError);
            }
        });
    }

=======
>>>>>>> 189a9a737764f9a7ded3cfb6eb4bcbb2d126df25
    function hapus(id) {
        Swal.fire({
            title: 'Yakin mau dihapus?',
            text: "Data tidak dapat dikembalikan!!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Ya'
        }).then((result) => {
            if (result.value) {
                $.ajax({
                    type: "post",
                    url: "<?= site_url('penjualan/hapus') ?>",
                    data: {
                        id: id
                    },
                    dataType: "json",
                    success: function(response) {
                        if (response.sukses) {
                            Swal.fire({
                                icon: 'success',
                                title: 'Berhasil',
                                text: response.sukses,
                            });
                            datapenjualan();
                        }
                    },
                    error: function(xhr, ajaxOptions, thorwnError) {
                        alert(xhr.status + "\n" + xhr.responseText + "\n" + thorwnError);
                    }
                });
            }
        });
    }
</script>