<?php

namespace App\Models;

use CodeIgniter\Model;

class DetailPenjualanModel extends Model
{
    protected $table      = 'penjualan';
    protected $primaryKey = 'no_struk';

    protected $allowedFields = ['no_struk', 'id_obat', 'qty', 'sub_total'];
}
