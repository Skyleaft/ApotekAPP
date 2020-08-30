<?php

namespace App\Controllers;

class Login extends BaseController
{
    public function index()
    {
        return view('uts/viewlogin');
    }


    public function encrypt()
    {
        echo password_hash('user123', PASSWORD_BCRYPT);
    }
}
