<?php

namespace App\Models;

use CodeIgniter\Model;

class PegawaiModel extends Model
{
    protected $table      = 'pegawai';
    protected $primaryKey = 'id';

    protected $allowedFields = ['no_ktp', 'nama', 'jenis_kelamin', 'tgl_lahir', 'alamat', 'no_telp'];
}
