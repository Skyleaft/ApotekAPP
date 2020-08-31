<?php

namespace App\Controllers;

use App\Models\ObatModel;
use CodeIgniter\CLI\Console;

class Obat extends BaseController
{
    public function index()
    {
        //d($obt->findAll());
        return view('obat/viewshowdata');
    }

    public function ambildata()
    {
        if ($this->request->isAJAX()) {

            $data = [
                'showdata' => $this->obt->findAll()
            ];
            $msg = [
                'data' => view('obat/dataobat', $data)
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
                'data' => view('obat/modaltambah')
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
                    'label' => 'Nama Obat',
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

                $data = new ObatModel;
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
                'sukses' => view('obat/modaledit', $data)
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
                'stok' => $this->request->getVar('stok'),
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
                'sukses' => 'Data Obat Berhasil Dihapus'
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
                'data' => view('obat/formtambahbanyak')
            ];
            echo json_encode($msg);
        } else {
            exit('Maaf Tidak dapat diproses');
        }
    }

    public function simpanbanyak()
    {
        if ($this->request->isAJAX()) {
            $ktp = $this->request->getVar('ktp');
            $nama = $this->request->getVar('nama');
            $jk = $this->request->getVar('jk');
            $tgl_lahir = $this->request->getVar('tgl_lahir');
            $alamat = $this->request->getVar('alamat');
            $no_telp = $this->request->getVar('no_telp');

            $jmldata = count($ktp);

            for ($i = 0; $i < $jmldata; $i++) {
                $this->obt->insert([
                    'no_ktp' => $ktp[$i],
                    'nama' => $nama[$i],
                    'jenis_kelamin' => $jk[$i],
                    'tgl_lahir' => $tgl_lahir[$i],
                    'alamat' => $alamat[$i],
                    'no_telp' => $no_telp[$i]
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
