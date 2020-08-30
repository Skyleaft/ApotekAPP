<table class="table" id="datapegawai">
    <thead>
        <tr>
            <th style="display: none;"></th>
            <th>No</th>
            <th>Nomor KTP</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Tanggal Lahir</th>
            <th>Alamat</th>
            <th>No.Telepon</th>
            <th>Aksi/th>
        </tr>
    </thead>

    <tbody>
        <?php $nomor = 0;
        foreach ($showdata as $row) :
            $nomor++;
        ?>
            <tr>
                <td style="display: none;"><?= $row['id'] ?></td>
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
                    <button type="button" class="btn btn-danger btn-sm" onclick="edit('<?= $row['id'] ?>')">
                        <i class="fa fa-trash"></i>
                    </button>
                </td>
            </tr>

        <?php endforeach; ?>
    </tbody>
</table>

<script type="text/javascript">
    $(document).ready(function() {
        $('#datapegawai').DataTable();
    });

    function edit(id) {
        $.ajax({
            type: "post",
            url: "<?= site_url('pegawai/formedit') ?>",
            data: {
                idpeg: id
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
</script>