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

<script type="text/javascript">
    $(document).ready(function() {
        $('#datapegawai').DataTable();
    });
</script>