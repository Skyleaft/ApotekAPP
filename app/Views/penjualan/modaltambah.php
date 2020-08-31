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
<<<<<<< HEAD
            <?= form_open('keranjang/simpandata', ['class' => 'formkeranjang']) ?>
=======
            <?= form_open('penjualan/simpankeranjang', ['class' => 'formpenjualan']) ?>
>>>>>>> 189a9a737764f9a7ded3cfb6eb4bcbb2d126df25
            <?= csrf_field(); ?>
            <div class="modal-body">
                <div class="card-body">


                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary btn_simpan">Tambah Produk</button>
            </div>

            <? form_close() ?>
        </div>
    </div>
</div>



<script>
    $(document).ready(function() {
<<<<<<< HEAD
        $('.formkeranjang').submit(function(e) {
=======
        $('.formpenjualan').submit(function(e) {
>>>>>>> 189a9a737764f9a7ded3cfb6eb4bcbb2d126df25
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
                    $('.btn_simpan').html('Tambah Produk');
                },
                success: function(response) {
<<<<<<< HEAD
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
                        datakeranjang();
                    }
=======
                    Swal.fire({
                        icon: 'success',
                        title: 'Berhasil',
                        text: response.sukses,
                    })
                    $('#modaltambah').modal('hide');
                    datakeranjang();
>>>>>>> 189a9a737764f9a7ded3cfb6eb4bcbb2d126df25
                },

                error: function(xhr, ajaxOptions, thorwnError) {
                    alert(xhr.status + "\n" + xhr.responseText + "\n" + thorwnError);
                }

            });
            return false;
        })
    });
</script>