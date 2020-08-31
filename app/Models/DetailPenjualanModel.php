<?php

namespace App\Models;

use CodeIgniter\Model;

class DetailPenjualanModel extends Model
{
<<<<<<< HEAD
    protected $table      = 'obat';
    protected $primaryKey = 'id';

    protected $allowedFields = ['nama', 'satuan', 'harga', 'stok'];
=======
    protected $table      = 'penjualan';
    protected $primaryKey = 'no_struk';

    protected $allowedFields = ['no_struk', 'id_obat', 'qty', 'sub_total'];
>>>>>>> 189a9a737764f9a7ded3cfb6eb4bcbb2d126df25
}
