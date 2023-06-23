<?php

namespace App\Controllers;

use App\Models\UserModel;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home',
        ];
        return view('pages/landingPage', $data);
    }

    public function daftar()
    {
        $data = [
            'title' => 'Daftar Sekarang',
        ];
        return view('pages/daftar', $data);
    }

    public function pendaftaran_Sma()
    {
        $data = [
            'title' => 'Pendafataran SMA/SMK/Sederajat'
        ];
        return view('pages/smaPage', $data);
    }

    // proses menambahkan data pendaftar sma
    public function addDataSma()
    {
        $db      = \Config\Database::connect();
        $add = [
            'nama' => $this->request->getVar('nama'),
            'asal_sekolah' => $this->request->getVar('asal_sekolah'),
            'no_hp' => $this->request->getVar('no_hp'),
            'judul' => $this->request->getVar('judul'),
            'ringkasan' => $this->request->getVar('ringkasan'),
            'link' => $this->request->getVar('link'),
        ];

        $db->table('sma')->insert($add);
        if ($db->affectedRows() > 0) {
            return redirect()->to(site_url('pendaftaran_Sma'))->with('pesan', 'Pendaftaran Berhasil');
        }
    }


    public function pendaftaran_Opd()
    {
        $data = [
            'title' => 'Pendafataran OPD'
        ];
        return view('pages/opdPage', $data);
    }

    // proses menambahkan data pengguna opd
    public function addDataOpd()
    {
        $db      = \Config\Database::connect();
        $add = [
            'nama' => $this->request->getVar('nama'),
            'nama_instansi_opd' => $this->request->getVar('nama_instansi_opd'),
            'no_hp' => $this->request->getVar('no_hp'),
            'judul' => $this->request->getVar('judul'),
            'ringkasan' => $this->request->getVar('ringkasan'),
            'tahun_penerapan' => $this->request->getVar('tahun_penerapan'),
            'link' => $this->request->getVar('link'),
        ];

        $db->table('opd')->insert($add);
        if ($db->affectedRows() > 0) {
            return redirect()->to(site_url('pendaftaran_Opd'))->with('pesan', 'Pendaftaran Berhasil');
        }
    }

    public function panduan()
    {
        $data = [
            'title' => 'Panduan Pendaftaran'
        ];
        return view('pages/panduanPage', $data);
    }

    public function login()
    {

        $data = [
            'title' => 'Login',
        ];
        return view('auth/login', $data);
    }


    // proses login
    public function loginLogic()
    {
        $data = [
            'title' => 'Login',
        ];
        $validation = $this->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        if (!$validation) {
            return redirect()->to(site_url('home/login'))->with('error', 'username atau password salah');
        }

        $userModel = new UserModel();
        $user = $userModel->where('username', $this->request->getVar('username'))->first();

        if (!$user || !password_verify($this->request->getVar('password'), $user['password'])) {
            return redirect()->to(site_url('home/login'))->with('error', 'username atau password salah');
        }

        $session = session();
        $session->set([
            'id' => $user['id'],
            'nama' => $user['nama'],
            'role' => $user['role'],
        ]);

        if ($user['role'] === 'admin') {
            return redirect()->to('admin/dashboard');
        } else {
            return redirect()->to('user/user');
        }
    }


    // proses logout
    public function logout()
    {
        // Hapus data pengguna dari sesi
        $session = session();
        $session->remove(['id', 'nama', 'role']);

        // Redirect ke halaman login atau halaman beranda setelah logout
        return redirect()->to('login');
    }
}
