<?= form_open('pegawai/hapusbanyak', ['class' => 'formhapusbanyak']); ?>
<?= csrf_field(); ?>
<button type="submit" class="btn btn-danger btnhapus mb-3">
    <i class="fas fa-trash"></i> Hapus Banyak Data
</button>

<table class="table" id="datapegawai">
    <thead>
        <tr>
            <th style="display: none;"></th>
            <th>
                <input type="checkbox" id="centangSemua">
            </th>
            <th>No</th>
            <th>Nomor KTP</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Tanggal Lahir</th>
            <th>Alamat</th>
            <th>No.Telepon</th>
            <th>Aksi</th>
        </tr>
    </thead>

    <tbody>
        <?php $nomor = 0;
        foreach ($showdata as $row) :
            $nomor++;
        ?>
            <tr>
                <td style="display: none;"><?= $row['id'] ?></td>
                <td>
                    <input type="checkbox" id="centangid" name="id[]" class="centangid" value="<?= $row['id'] ?>">
                </td>
                <td><?= $nomor ?></td>
                <td><?= $row['no_ktp'] ?></td>
                <td><?= $row['nama'] ?></td>
                <td><?= $row['jenis_kelamin'] ?></td>
                <td><?= $row['tgl_lahir'] ?></td>
                <td><?= $row['alamat'] ?></td>
                <td><?= $row['no_telp'] ?></td>
                <td>
                    <button type="button" class="btn btn-info btn-sm" onclick="edit('<?= $row['id'] ?>')">
                        <i class="fa fa-tags"></i>
                    </button>
                    <button type="button" class="btn btn-danger btn-sm" onclick="hapus('<?= $row['id'] ?>')">
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
        $('#datapegawai').DataTable();

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
                    text: `${jmldata.length} data akan dihapus!!`,
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
                                    datapegawai();
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

    function edit(id) {
        $.ajax({
            type: "post",
            url: "<?= site_url('pegawai/formedit') ?>",
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
                    url: "<?= site_url('pegawai/hapus') ?>",
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
                            datapegawai();
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