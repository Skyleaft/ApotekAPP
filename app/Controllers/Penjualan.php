<?php

namespace App\Controllers;

use CodeIgniter\CLI\Console;


class Penjualan extends BaseController
{

    public function index()
    {
        //d($dpenj->findAll());
        return view('penjualan/viewshowdata');
    }

    public function ambildatakeranjang()
    {
        if ($this->request->isAJAX()) {

            $db = \Config\Database::connect();
            $builder = $db->table('penjualan');
            $builder->select('penjualan.no_struk,obat.nama,detail_penjualan.qty, obat.harga, detail_penjualan.sub_total');
            $builder->join('detail_penjualan', 'detail_penjualan.no_struk = penjualan.no_struk', 'left');
            $builder->join('obat', 'detail_penjualan.id_obat = obat.id', 'left');
            $builder->where('penjualan.no_struk', '1233551');
            $query = $builder->get();

            $data = [
                'showdata' => $query->getResultArray()
            ];
            $msg = [
                'data' => view('penjualan/datapenjualan', $data)
            ];
            echo json_encode($msg);
        } else {
            exit('Maaf Tidak dapat diproses');
        }
        // $db = \Config\Database::connect();
        // $builder = $db->table('penjualan');
        // $builder->select('penjualan.no_struk,obat.nama,detail_penjualan.qty, obat.harga, detail_penjualan.sub_total');
        // $builder->join('detail_penjualan', 'detail_penjualan.no_struk = penjualan.no_struk', 'left');
        // $builder->join('obat', 'detail_penjualan.id_obat = obat.id', 'left');
        // $builder->where('penjualan.no_struk', '1233551');
        // $query = $builder->get();

        // d($query->getResultArray());
    }

    public function formtambah()
    {
        if ($this->request->isAJAX()) {
            $msg = [
                'data' => view('penjualan/modaltambah')
            ];
            echo json_encode($msg);
        } else {
            exit('Maaf Tidak dapat diproses');
        }
    }

    public function simpankeranjang()
    {
        if ($this->request->isAJAX()) {
            $simpandata = [
                'no_struk' => $this->request->getVar('no_struk'),
                'id_obat' => $this->request->getVar('id_obat'),
                'qty' => $this->request->getVar('qty'),
                'sub_total' => $this->request->getVar('sub_total')
            ];

            $this->dpenj->insert($simpandata);

            $msg = [
                'sukses' => 'Data berhasil disimpan'
            ];
            echo json_encode($msg);
        } else {
            exit('Maaf Tidak dapat diproses');
        }
    }

    public function simpandata()
    {
        if ($this->request->isAJAX()) {
            $validation = \Config\Services::validation();

            $valid = $this->validate([
                'no_struk' => [
                    'label' => 'Nomor Struk',
                    'rules' => 'required|is_unique[penjualan.no_struk]',
                    'errors' => [
                        'required' => '{field} tidak boleh kosong',
                        'is_unique' => '{field} tidak boleh ada yang sama, silahkan yang lain'
                    ]
                ],
            ]);

            if (!$valid) {
                $msg = [
                    'error' => [
                        'no_struk' => $validation->getError('no_struk')
                    ]
                ];
            } else {
                $simpandata = [
                    'no_struk' => $this->request->getVar('no_struk'),
                    'tgl_penjualan' => $this->request->getVar('tgl_penjualan'),
                    'total' => $this->request->getVar('total'),
                    'tunai' => $this->request->getVar('tunai'),
                    'kembalian' => $this->request->getVar('kembalian'),
                    'id_pegawai' => $this->request->getVar('id_pegawai'),
                    'id_pelanggan' => $this->request->getVar('id_pelanggan')
                ];

                $this->dpenj->insert($simpandata);

                $msg = [
                    'sukses' => 'Data berhasil disimpan'
                ];
            }
            echo json_encode($msg);
        } else {
            exit('Maaf Tidak dapat diproses');
        }
    }
}
