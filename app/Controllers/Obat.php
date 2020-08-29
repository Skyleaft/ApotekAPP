<?php

namespace App\Controllers;

use App\Models\ObatModel;

class Obat extends BaseController
{
    public function index()
    {
        $dt = new ObatModel;
        $data = [
            'showdata' => $dt->findAll()
        ];
        //d($dt->findAll());
        return view('obat/viewshowdata', $data);
    }
}
