<?php

namespace App\Models;

use CodeIgniter\Model;

class PenjualanModel extends Model
{
    protected $table      = 'penjualan';
    protected $primaryKey = 'no_struk';

    protected $allowedFields = ['nama', 'satuan', 'harga', 'stok'];
}
