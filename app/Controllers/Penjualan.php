<?php

namespace App\Controllers;

use App\Models\PenjualanModel;
use CodeIgniter\CLI\Console;

class Penjualan extends BaseController
{
    public function index()
    {
        //d($obt->findAll());
        return view('penjualan/viewshowdata');
    }

    public function ambildata()
    {
        if ($this->request->isAJAX()) {

            $data = [
                'showdata' => $this->obt->findAll()
            ];
            $msg = [
                'data' => view('penjualan/datapenjualan', $data)
            ];
            echo json_encode($msg);
        } else {
            exit('Maaf Tidak dapat diproses');
        }
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

    public function simpandata()
    {
        if ($this->request->isAJAX()) {
            $validation = \Config\Services::validation();

            $valid = $this->validate([
                'nama' => [
                    'label' => 'Nama Penjualan',
                    'rules' => 'required',
                    'errors' => [
                        'required' => '{field} tidak boleh kosong',
                    ]
                ]
            ]);

            if (!$valid) {
                $msg = [
                    'error' => [
                        'nama' => $validation->getError('nama')
                    ]
                ];
            } else {
                $simpandata = [
                    'nama' => $this->request->getVar('nama'),
                    'satuan' => $this->request->getVar('satuan'),
                    'harga' => $this->request->getVar('harga'),
                    'stok' => $this->request->getVar('stok')
                ];

                $data = new PenjualanModel;
                $data->insert($simpandata);

                $msg = [
                    'sukses' => 'Data berhasil disimpan'
                ];
            }
            echo json_encode($msg);
        } else {
            exit('Maaf Tidak dapat diproses');
        }
    }

    public function formedit()
    {
        if ($this->request->isAJAX()) {
            $id = $this->request->getVar('id');

            $row = $this->obt->find($id);
            $data = [
                'id' => $row['id'],
                'nama' => $row['nama'],
                'satuan' => $row['satuan'],
                'harga' => $row['harga'],
                'stok' => $row['stok']
            ];

            $msg = [
                'sukses' => view('penjualan/modaledit', $data)
            ];
            echo json_encode($msg);
        } else {
            exit('Maaf Tidak dapat diproses');
        }
    }

    public function updatedata()
    {
        if ($this->request->isAJAX()) {
            $id = $this->request->getVar('id');
            $simpandata = [
                'nama' => $this->request->getVar('nama'),
                'satuan' => $this->request->getVar('satuan'),
                'harga' => $this->request->getVar('harga'),
                'stok' => $this->request->getVar('stok')
            ];

            $this->obt->update($id, $simpandata);

            $msg = [
                'sukses' => 'Data berhasil Diubah'
            ];
            echo json_encode($msg);
        } else {
            exit('Maaf Tidak dapat diproses');
        }
    }

    public function hapus()
    {
        if ($this->request->isAJAX()) {
            $id = $this->request->getVar('id');

            $this->obt->delete($id);

            $msg = [
                'sukses' => 'Data Penjualan Berhasil Dihapus'
            ];
            echo json_encode($msg);
        } else {
            exit('Maaf Tidak dapat diproses');
        }
    }

    public function formtambahbanyak()
    {
        if ($this->request->isAJAX()) {
            $msg = [
                'data' => view('penjualan/formtambahbanyak')
            ];
            echo json_encode($msg);
        } else {
            exit('Maaf Tidak dapat diproses');
        }
    }

    public function simpanbanyak()
    {
        if ($this->request->isAJAX()) {
            $nama = $this->request->getVar('nama');
            $satuan = $this->request->getVar('satuan');
            $harga = $this->request->getVar('harga');
            $stok = $this->request->getVar('stok');

            $jmldata = count($nama);

            for ($i = 0; $i < $jmldata; $i++) {
                $this->obt->insert([
                    'nama' => $nama[$i],
                    'satuan' => $satuan[$i],
                    'harga' => $harga[$i],
                    'stok' => $stok[$i],
                ]);
            };
            $msg = [
                'sukses' => "$jmldata Data Berhasil Disimpan"
            ];
            echo json_encode($msg);
        } else {
            exit('Maaf Tidak dapat diproses');
        }
    }

    public function hapusbanyak()
    {
        if ($this->request->isAJAX()) {
            $id = $this->request->getVar('id');

            $jmldata = count($id);

            for ($i = 0; $i < $jmldata; $i++) {
                $this->obt->delete($id[$i]);
            };


            $msg = [
                'sukses' => "$jmldata Data Berhasil Dihapus"
            ];
            echo json_encode($msg);
        } else {
            exit('Maaf Tidak dapat diproses');
        }
    }
}
