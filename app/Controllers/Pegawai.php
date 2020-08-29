<?php

namespace App\Controllers;

use App\Models\PegawaiModel;

class Pegawai extends BaseController
{
    public function index()
    {
        $peg = new PegawaiModel;
        $data = [
            'showdata' => $peg->findAll()
        ];
        //d($peg->findAll());
        return view('pegawai/viewshowdata', $data);
    }
}
