<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;

class UserController extends Controller
{
    public function index()
    {
        return view('user/login');
    }

    public function process()
    {
        $user = new UserModel();
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');
        $dataUser = $user->where([
            'username' => $username,
        ])->first();
        if ($dataUser) {
            if (password_verify($password, $dataUser->password)) {
                session()->set([
                    'username' => $dataUser->username,
                    'logged_in' => TRUE
                ]);
                return redirect()->to(base_url('/'));
            } else {
                session()->setFlashdata('error', 'Username & Password Salah');
                return redirect()->back();
            }
        } else {
            session()->setFlashdata('error', 'Username & Password Salah');
            return redirect()->back();
        }
    }
    function logout()
    {
        session()->destroy();
        return redirect()->to('login');
    }
}
