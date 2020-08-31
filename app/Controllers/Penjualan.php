<?php

namespace App\Controllers;

<<<<<<< HEAD
use App\Models\PenjualanModel;
use CodeIgniter\CLI\Console;

=======
use CodeIgniter\CLI\Console;


>>>>>>> 189a9a737764f9a7ded3cfb6eb4bcbb2d126df25
class Penjualan extends BaseController
{

    public function index()
    {
<<<<<<< HEAD
        //d($obt->findAll());
        return view('penjualan/viewshowdata');
    }

    public function ambildata()
    {
        if ($this->request->isAJAX()) {

            $data = [
                'showdata' => $this->obt->findAll()
=======
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
>>>>>>> 189a9a737764f9a7ded3cfb6eb4bcbb2d126df25
            ];
            $msg = [
                'data' => view('penjualan/datapenjualan', $data)
            ];
            echo json_encode($msg);
        } else {
            exit('Maaf Tidak dapat diproses');
        }
<<<<<<< HEAD
=======
        // $db = \Config\Database::connect();
        // $builder = $db->table('penjualan');
        // $builder->select('penjualan.no_struk,obat.nama,detail_penjualan.qty, obat.harga, detail_penjualan.sub_total');
        // $builder->join('detail_penjualan', 'detail_penjualan.no_struk = penjualan.no_struk', 'left');
        // $builder->join('obat', 'detail_penjualan.id_obat = obat.id', 'left');
        // $builder->where('penjualan.no_struk', '1233551');
        // $query = $builder->get();

        // d($query->getResultArray());
>>>>>>> 189a9a737764f9a7ded3cfb6eb4bcbb2d126df25
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
<<<<<<< HEAD
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
=======
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
>>>>>>> 189a9a737764f9a7ded3cfb6eb4bcbb2d126df25
            ];
            echo json_encode($msg);
        } else {
            exit('Maaf Tidak dapat diproses');
        }
    }

<<<<<<< HEAD
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
=======
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
>>>>>>> 189a9a737764f9a7ded3cfb6eb4bcbb2d126df25
            echo json_encode($msg);
        } else {
            exit('Maaf Tidak dapat diproses');
        }
    }
}
