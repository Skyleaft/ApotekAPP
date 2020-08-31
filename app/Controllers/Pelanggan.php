<?php

namespace App\Controllers;

use App\Models\PelangganModel;
use CodeIgniter\CLI\Console;

class Pelanggan extends BaseController
{
    public function index()
    {
        //d($pel->findAll());
        return view('pelanggan/viewshowdata');
    }

    public function ambildata()
    {
        if ($this->request->isAJAX()) {

            $data = [
                'showdata' => $this->pel->findAll()
            ];
            $msg = [
                'data' => view('pelanggan/datapelanggan', $data)
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
                'data' => view('pelanggan/modaltambah')
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
                    'label' => 'Nama Pelanggan',
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
                    'jenis_kelamin' => $this->request->getVar('jk'),
                    'tgl_lahir' => $this->request->getVar('tgl_lahir'),
                    'alamat' => $this->request->getVar('alamat'),
                    'no_telp' => $this->request->getVar('no_telp')
                ];

                $data = new PelangganModel;
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

            $row = $this->pel->find($id);
            $data = [
                'id' => $row['id'],
                'nama' => $row['nama'],
                'jk' => $row['jenis_kelamin'],
                'tgl_lahir' => $row['tgl_lahir'],
                'alamat' => $row['alamat'],
                'no_telp' => $row['no_telp'],
            ];

            $msg = [
                'sukses' => view('pelanggan/modaledit', $data)
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
                'jenis_kelamin' => $this->request->getVar('jk'),
                'tgl_lahir' => $this->request->getVar('tgl_lahir'),
                'alamat' => $this->request->getVar('alamat'),
                'no_telp' => $this->request->getVar('no_telp')
            ];

            $this->pel->update($id, $simpandata);

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

            $this->pel->delete($id);

            $msg = [
                'sukses' => 'Data Pelanggan Berhasil Dihapus'
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
                'data' => view('pelanggan/formtambahbanyak')
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
            $jk = $this->request->getVar('jk');
            $tgl_lahir = $this->request->getVar('tgl_lahir');
            $alamat = $this->request->getVar('alamat');
            $no_telp = $this->request->getVar('no_telp');

            $jmldata = count($nama);

            for ($i = 0; $i < $jmldata; $i++) {
                $this->pel->insert([
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
                $this->pel->delete($id[$i]);
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
