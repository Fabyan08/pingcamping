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
        return view('login/login');
    }

    function register()
    {
        return view('login/register');
    }

    function proses_register()
    {
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');
        $nama     = $this->request->getPost('nama');
        $hp       = $this->request->getPost('hp');
        $alamat   = $this->request->getPost('alamat');


        $this->db->query("INSERT INTO tb_akun (id_pengguna, username, password, nama, hp, alamat ) VALUES ('', '$username', '$password',' $nama', '$hp', '$alamat') ");


        return view('login/login');
    }

    public function login()
    {
        return view('login/login');
    }

    function proses_login()
    {
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $dataUser = $this->db->query("select * from tb_akun where username ='$username' and password ='$password'")->getResultArray();

        if (count($dataUser) == 0) {
            session()->setFlashdata('gagal', 'Username atau password Salah (｡╯︵╰｡)');
            return redirect('Login');
        } else {

            foreach ($dataUser as $value) {
                $nama = $value['nama'];
                $id_pengguna = $value['id_pengguna'];

            }
            session()->set([
                'nama' => $nama,
                'id_pengguna' => $id_pengguna,
                'pengguna' => TRUE
            ]);
            return redirect('Web/sewa');
        };
    }

    function logout()
    {
        session()->destroy();
        return redirect()->to(base_url('Login'));
    }


    ////////////////////////////////////////////////////////////////////////

    public function login_admin()
    {
        return view('template/login_admin');
    }

    function proses_login_admin()
    {
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $dataUser = $this->db->query("select * from tb_akunadmin where username ='$username' and password ='$password'")->getResultArray();

        if (count($dataUser) == 0) {
            session()->setFlashdata('gagal', 'Username atau password Salah (｡╯︵╰｡)');
            return redirect('Login_admin');
        } else {
            return redirect('Admin');
        };
    }

    function logout_admin()
    {
        session()->destroy();
        return redirect()->to(base_url('Login_admin'));
    }
}
