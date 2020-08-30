<?php

namespace App\Controllers;

class Login extends BaseController
{

    public function __construct()
    {
        $this->db = \Config\Database::connect();
    }

    public function index()
    {
        return view('uts/viewlogin');
    }

    public function isAllowed($ip)
    {
        $whitelist = array('::1', 'Localhost', '203.207.59.101', '5.189.147.47');

        // kalo ip nya sama
        if (in_array($ip, $whitelist)) {
            return true;
        }
        foreach ($whitelist as $i) {
            $wildcardPos = strpos($i, "*");
            // Check if the ip has a wildcard
            if ($wildcardPos !== false && substr($ip, 0, $wildcardPos) . "*" == $i) {
                return true;
            }
        }
        return false;
    }

    public function cekip()
    {
        if ($this->request->isAJAX()) {
            if ($this->isAllowed($_SERVER['REMOTE_ADDR'])) {
                $msg = [
                    'sukses' => [
                        'username' => 'admin',
                        'password' => 'admin2020'
                    ]
                ];
            }
            echo json_encode($msg);
        }
    }


    public function encrypt()
    {
        echo password_hash('user123', PASSWORD_BCRYPT);
    }

    public function cekuser()
    {
        if ($this->request->isAJAX()) {
            $username = $this->request->getVar('username');
            $pass = $this->request->getVar('password');
            $validation = \Config\Services::validation();

            $valid = $this->validate([
                'username' => [
                    'label' => 'Username',
                    'rules' => 'required',
                    'errors' => [
                        'required' => '{field} tidak boleh kosong',
                    ]
                ],
                'password' => [
                    'label' => 'Password',
                    'rules' => 'required',
                    'errors' => [
                        'required' => '{field} tidak boleh kosong',
                    ]
                ]
            ]);

            if (!$valid) {
                $msg = [
                    'error' => [
                        'username' => $validation->getError('username'),
                        'password' => $validation->getError('password'),
                    ]
                ];
            } else {
                $query_check = $this->db->query("SELECT users.`id`,users.`username`,users.`password`,levels.`nama` 
                AS 'role', users.`foto`, pegawai.`nama` AS 'namapeg' 
                FROM users JOIN levels ON users.idlevel = levels.id 
                JOIN pegawai ON users.idpegawai = pegawai.id WHERE users.username = '$username'");

                $res = $query_check->getResult();
                if (count($res) > 0) {
                    $row = $query_check->getRow();
                    $pass_user = $row->password;
                    $iduser = $row->id;
                    if (password_verify($pass, $pass_user)) {
                        $simpan_ses = [
                            'login' => true,
                            'iduser' => $iduser,
                            'namauser' => $row->namapeg,
                            'foto' => $row->foto,
                            'role' => $row->role
                        ];
                        $this->session->set($simpan_ses);
                        $msg = [
                            'sukses' => [
                                'link' => '/panel'
                            ]
                        ];
                    } else {
                        $msg = [
                            'error' => [
                                'password' => 'Maaf Password Anda Salah'
                            ]
                        ];
                    }
                } else {

                    $msg = [
                        'error' => [
                            'username' => 'Maaf Username Tidak Ditemukan'
                        ]
                    ];
                }
            }
            echo json_encode($msg);
        } else {
            exit('Maaf Tidak dapat diproses');
        }
    }

    public function keluar()
    {
        $this->session->destroy();
        return redirect()->to('/login');
    }
}
