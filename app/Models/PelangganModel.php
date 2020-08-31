<?php

namespace App\Models;

use CodeIgniter\Model;

class PelangganModel extends Model
{
    protected $table      = 'pelanggan';
    protected $primaryKey = 'id';

    protected $allowedFields = ['nama', 'jenis_kelamin', 'tgl_lahir', 'alamat', 'no_telp'];
}
