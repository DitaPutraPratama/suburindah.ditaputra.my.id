<?php

namespace App\Controllers;

use App\Models\Users;

class Admin extends BaseController
{
    protected $session;
    protected $userModel;

    public function __construct()
    {
        $this->session = session();
        $this->userModel = new Users();
    }
    public function login()
    {
        if ($this->session->get('logged_in')) {
            return redirect()->to(base_url('admin/dashboard'));
        }
        $data['title'] = 'Login Administrator';
        echo view('admin/template/header', $data);
        // echo view('template/nav');
        echo view('admin/login');
        echo view('admin/template/script');
    }

    public function doLogin()
    {
        $email    = filter_var($this->request->getPost('email'), FILTER_SANITIZE_EMAIL);
        $password = $this->request->getPost('password');

        if (empty($email) || empty($password)) {
            $this->session->setFlashdata('error', 'Email dan password wajib diisi.');
            return redirect()->to('admin/login')->withInput(); // supaya input tetap terisi
        }

        // Mencari data user berdasarkan email
        $user = $this->userModel->where('email', $email)->first();

        if ($user) {
            // Memeriksa apakah password sesuai dengan hash di database
            if ($password == $user['password']) {
                // Menyimpan data session pengguna
                $sessionData = [
                    'id'         => $user['id'],
                    'username'       => $user['username'],
                    'email'      => $user['email'],
                    'role'      => $user['role'],
                    'logged_in'  => true
                ];
                $this->session->set($sessionData);

                // Redirect ke halaman dashboard atau halaman lain yang diinginkan
                return redirect()->to('admin/dashboard');
            } else {
                // Jika password tidak cocok, set pesan error
                $this->session->setFlashdata('error', 'Password salah.');
                return redirect()->to('admin/login');
            }
        } else {
            // Jika email tidak ditemukan, set pesan error
            $this->session->setFlashdata('error', 'Email tidak ditemukan.');
            return redirect()->to('admin/login');
        }
    }

    // Fungsi untuk logout pengguna
    public function logout()
    {
        $this->session->destroy();
        return redirect()->to('admin/login');
    }
    public function register()
    {
        if ($this->session->get('logged_in')) {
            return redirect()->to(base_url('admin/dashboard'));
        }
        $data['title'] = 'Login Administrator';
        echo view('admin/template/header', $data);
        // echo view('template/nav');
        echo view('admin/register');
        echo view('admin/template/script');
    }

    public function doRegister()
    {
        // Ambil input dari POST
        $username  = strip_tags($this->request->getPost('username'));
        $emailInput = filter_var($this->request->getPost('email'), FILTER_SANITIZE_EMAIL);
        $password  = strip_tags($this->request->getPost('password'));

        // Validasi input wajib
        if (empty($username) || empty($emailInput) || empty($password)) {
            $this->session->setFlashdata('error', 'Semua field harus diisi.');
            return redirect()->to('admin/register');
        }

        // Periksa apakah email sudah terdaftar
        $user = $this->userModel->where('email', $emailInput)->first();
        if ($user) {
            $this->session->setFlashdata('error', 'Email sudah terdaftar.');
            return redirect()->to('admin/register');
        }

        // Persiapkan data untuk insert
        $data = [
            'username' => $username,
            'email'    => $emailInput,
            'password' => $password,
            'role'     => 'writer'
        ];

        // Insert data ke database dan redirect ke halaman login
        $this->userModel->insert($data);
        return redirect()->to(site_url('/admin/login'));
    }
}
