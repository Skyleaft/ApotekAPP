<?php

namespace App\Models;

use CodeIgniter\Model;

class DetailPenjualanModel extends Model
{
    protected $table      = 'obat';
    protected $primaryKey = 'id';

    protected $allowedFields = ['nama', 'satuan', 'harga', 'stok'];
}
