<?php

namespace App\Controllers;

use App\Models\PegawaiModel;
use CodeIgniter\CLI\Console;

class Pegawai extends BaseController
{
    public function index()
    {
        //d($peg->findAll());
        return view('pegawai/viewshowdata');
    }

    public function ambildata()
    {
        if ($this->request->isAJAX()) {

            $data = [
                'showdata' => $this->peg->findAll()
            ];
            $msg = [
                'data' => view('pegawai/datapegawai', $data)
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
                'data' => view('pegawai/modaltambah')
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
                'ktp' => [
                    'label' => 'Nomor KTP',
                    'rules' => 'required|is_unique[pegawai.no_ktp]',
                    'errors' => [
                        'required' => '{field} tidak boleh kosong',
                        'is_unique' => '{field} tidak boleh ada yang sama, silahkan yang lain'
                    ]
                ],
                'nama' => [
                    'label' => 'Nama Pegawai',
                    'rules' => 'required',
                    'errors' => [
                        'required' => '{field} tidak boleh kosong',
                    ]
                ]
            ]);

            if (!$valid) {
                $msg = [
                    'error' => [
                        'ktp' => $validation->getError('ktp'),
                        'nama' => $validation->getError('nama')
                    ]
                ];
            } else {
                $simpandata = [
                    'no_ktp' => $this->request->getVar('ktp'),
                    'nama' => $this->request->getVar('nama'),
                    'jenis_kelamin' => $this->request->getVar('jk'),
                    'tgl_lahir' => $this->request->getVar('tgl_lahir'),
                    'alamat' => $this->request->getVar('alamat'),
                    'no_telp' => $this->request->getVar('no_telp')
                ];

                $data = new PegawaiModel;
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

            $row = $this->peg->find($id);
            $data = [
                'id' => $row['id'],
                'no_ktp' => $row['no_ktp'],
                'nama' => $row['nama'],
                'jk' => $row['jenis_kelamin'],
                'tgl_lahir' => $row['tgl_lahir'],
                'alamat' => $row['alamat'],
                'no_telp' => $row['no_telp'],
            ];

            $msg = [
                'sukses' => view('pegawai/modaledit', $data)
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

            $this->peg->update($id, $simpandata);

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

            $this->peg->delete($id);

            $msg = [
                'sukses' => 'Data Pegawai Berhasil Dihapus'
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
                'data' => view('pegawai/formtambahbanyak')
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
                $this->peg->insert([
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
                $this->peg->delete($id[$i]);
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
