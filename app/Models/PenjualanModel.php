<?php

namespace App\Models;

use CodeIgniter\Model;

class PenjualanModel extends Model
{
    protected $table      = 'penjualan';
    protected $primaryKey = 'no_struk';

<<<<<<< HEAD
    protected $allowedFields = ['nama', 'satuan', 'harga', 'stok'];
=======
    protected $allowedFields = ['no_struk', 'tgl_pembelian', 'total', 'tunai', 'kembalian', 'id_pegawai', 'id_pelanggan'];
>>>>>>> 189a9a737764f9a7ded3cfb6eb4bcbb2d126df25
}
