<?php

namespace App\Models;

use CodeIgniter\Model;

class PenjualanModel extends Model
{
    protected $table      = 'penjualan';
    protected $primaryKey = 'no_struk';

    protected $allowedFields = ['no_struk', 'tgl_pembelian', 'total', 'tunai', 'kembalian', 'id_pegawai', 'id_pelanggan'];
}
