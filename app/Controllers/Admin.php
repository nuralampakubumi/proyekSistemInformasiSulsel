<?php

namespace App\Controllers;

use App\Models\UserModel;

class Admin extends BaseController
{
    public function dashboard()
    {
        if (!session('id')) {
            return redirect()->to(site_url('/login'));
        }

        if ($_SESSION['role'] !== 'admin') {
            return redirect()->to(site_url('user/user'));
        }
        $data = [
            'title' => 'Dashboard',
        ];
        return view('admin/dashboard', $data);
    }

    // menambah pengguna
    public function addUser()
    {
        if (!session('id')) {
            return redirect()->to(site_url('/login'));
        }

        if ($_SESSION['role'] !== 'admin') {
            return redirect()->to(site_url('user/user'));
        }
        $data = [
            'title' => 'Tambah User',
        ];
        return view('admin/addUser', $data);
    }

    // proses menambah pengguna
    public function addUserLogic()
    {
        // Memvalidasi input dari formulir registrasi
        $validation = $this->validate([
            'nama' => 'required',
            'username' => 'required|is_unique[users.username]',
            'password' => 'required|min_length[6]',
            'role' => 'required',
        ]);

        if (!$validation) {
            // Jika validasi gagal, kembali ke halaman registrasi dengan pesan kesalahan
            return view('admin/addUser', ['validation' => $this->validator]);
        }

        // Simpan data pengguna ke dalam database
        $userModel = new UserModel();
        $userModel->save([
            'nama' => $this->request->getVar('nama'),
            'username' => $this->request->getVar('username'),
            'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
            'role' => $this->request->getVar('role'),
        ]);

        // Redirect ke halaman login atau halaman beranda setelah registrasi sukses
        return redirect()->to('daftar_juri')->with('error', 'Registration successful. Please login.');
    }


    // menampilkan data pengguna
    public function daftar_juri()
    {
        if (!session('id')) {
            return redirect()->to(site_url('/login'));
        }

        if ($_SESSION['role'] !== 'admin') {
            return redirect()->to(site_url('user/user'));
        }
        $db      = \Config\Database::connect();
        $builder = $db->table('users');
        $query   = $builder->get()->getResult();
        $data = [
            'title' => 'Daftar Juri',
            'result' => $query,
        ];
        return view('admin/daftarJuri', $data);
    }


    // mengedit data pengguna
    public function editDataUser($id)
    {
        if (!session('id')) {
            return redirect()->to(site_url('/login'));
        }

        if ($_SESSION['role'] !== 'admin') {
            return redirect()->to(site_url('user/user'));
        }
        $db      = \Config\Database::connect();
        $builder = $db->table('users');
        $record   = $builder->where('id', $id)->get()->getRow();
        $data = [
            'title' => 'Edit Data',
            'record' => $record,
        ];
        return view('admin/editUser', $data);
    }

    // proses perubahan data pengguna
    public function updateDataUser()
    {
        if (!session('id')) {
            return redirect()->to(site_url('/login'));
        }

        if ($_SESSION['role'] !== 'admin') {
            return redirect()->to(site_url('user/user'));
        }
        $db      = \Config\Database::connect();
        $builder = $db->table('users');

        $id = $this->request->getPost('id');
        $data = [
            'id' => $id,
            'nama' => $this->request->getVar('nama'),
            'username' => $this->request->getVar('username'),
            'password' => $this->request->getVar('password'),
            'role' => $this->request->getVar('role'),
        ];

        $builder->where('id', $id)->update($data);
        return redirect()->to(site_url('daftar_juri'))->with('pesan', 'Data Berhasil Diubah');
    }


    // menghapus data penggunna
    public function deletedataUser($id)
    {
        if (!session('id')) {
            return redirect()->to(site_url('/login'));
        }

        if ($_SESSION['role'] !== 'admin') {
            return redirect()->to(site_url('user/user'));
        }
        $db      = \Config\Database::connect();
        $builder = $db->table('users');

        $builder->where('id', $id)->delete();
        return redirect()->to(site_url('daftar_juri'))->with('pesan', 'Data Berhasil Dihapus');
    }



    // tambah Pendaftar Sma
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
            return redirect()->to(site_url('admin/pendaftar_Sma'))->with('pesan', 'Pendaftaran Berhasil');
        }
    }
    // menampilkan data pendaftar SMA
    public function pendaftar_Sma()
    {
        if (!session('id')) {
            return redirect()->to(site_url('/login'));
        }

        if ($_SESSION['role'] !== 'admin') {
            return redirect()->to(site_url('user/user'));
        }
        $db      = \Config\Database::connect();
        $builder = $db->table('sma');
        $query   = $builder->get()->getResult();
        $data = [
            'title' => 'Pendaftar SMA/SMK/Sederajat',
            'result' => $query,
        ];
        return view('admin/pendaftarSma', $data);
    }

    public function tambahSma()
    {
        if (!session('id')) {
            return redirect()->to(site_url('/login'));
        }

        if ($_SESSION['role'] !== 'admin') {
            return redirect()->to(site_url('user/user'));
        }
        $data = [
            'title' => 'Tambah Data',
        ];
        return view('admin/addSma', $data);
    }

    // mengedit data pendaftar SMA
    public function editDataSma($id)
    {
        if (!session('id')) {
            return redirect()->to(site_url('/login'));
        }

        if ($_SESSION['role'] !== 'admin') {
            return redirect()->to(site_url('user/user'));
        }
        $db      = \Config\Database::connect();
        $builder = $db->table('sma');
        $record   = $builder->where('id', $id)->get()->getRow();
        $data = [
            'title' => 'Edit Data',
            'record' => $record,
        ];
        return view('admin/smaPage', $data);
    }

    // proses mengubah data Pendaftar SMA
    public function updateDataSma()
    {
        if (!session('id')) {
            return redirect()->to(site_url('/login'));
        }

        if ($_SESSION['role'] !== 'admin') {
            return redirect()->to(site_url('user/user'));
        }
        $db      = \Config\Database::connect();
        $builder = $db->table('sma');

        $id = $this->request->getPost('id');
        $data = [
            'id' => $id,
            'nama' => $this->request->getVar('nama'),
            'asal_sekolah' => $this->request->getVar('asal_sekolah'),
            'no_hp' => $this->request->getVar('no_hp'),
            'judul' => $this->request->getVar('judul'),
            'ringkasan' => $this->request->getVar('ringkasan'),
            'link' => $this->request->getVar('link'),
        ];

        $builder->where('id', $id)->update($data);
        return redirect()->to(site_url('pendaftar_Sma'))->with('pesan', 'Data Berhasil Diubah');
    }

    // menghapus data Pendaftar SMA
    public function deletedataSma($id)
    {
        if (!session('id')) {
            return redirect()->to(site_url('/login'));
        }

        if ($_SESSION['role'] !== 'admin') {
            return redirect()->to(site_url('user/user'));
        }
        $db      = \Config\Database::connect();
        $builder = $db->table('sma');

        $builder->where('id', $id)->delete();
        return redirect()->to(site_url('pendaftar_Sma'))->with('pesan', 'Data Berhasil Dihapus');
    }


    // menampilkan data Pendatar OPD
    public function pendaftar_Opd()
    {
        if (!session('id')) {
            return redirect()->to(site_url('/login'));
        }

        if ($_SESSION['role'] !== 'admin') {
            return redirect()->to(site_url('user/user'));
        }
        $db      = \Config\Database::connect();
        $builder = $db->table('opd');
        $query   = $builder->get()->getResult();
        $data = [
            'title' => 'Pendaftar OPD',
            'result' => $query,
        ];
        return view('admin/pendaftarOpd', $data);
    }

    public function tambahOpd()
    {
        if (!session('id')) {
            return redirect()->to(site_url('/login'));
        }

        if ($_SESSION['role'] !== 'admin') {
            return redirect()->to(site_url('user/user'));
        }
        $data = [
            'title' => 'Tambah Data',
        ];
        return view('admin/addOpd', $data);
    }
    // tambah pendaftar Opd
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
            return redirect()->to(site_url('admin/pendaftar_Opd'))->with('pesan', 'Pendaftaran Berhasil');
        }
    }

    // mengedit data pendaftar OPD
    public function editDataOpd($id)
    {
        if (!session('id')) {
            return redirect()->to(site_url('/login'));
        }

        if ($_SESSION['role'] !== 'admin') {
            return redirect()->to(site_url('user/user'));
        }
        $db      = \Config\Database::connect();
        $builder = $db->table('opd');
        $record   = $builder->where('id', $id)->get()->getRow();
        $data = [
            'title' => 'Edit Data',
            'record' => $record,
        ];
        return view('admin/opdPage', $data);
    }


    // proses edit data pendaftar OPD
    public function updateDataOpd()
    {
        if (!session('id')) {
            return redirect()->to(site_url('/login'));
        }

        if ($_SESSION['role'] !== 'admin') {
            return redirect()->to(site_url('user/user'));
        }
        $db      = \Config\Database::connect();
        $builder = $db->table('opd');

        $id = $this->request->getPost('id');
        $data = [
            'id' => $id,
            'nama' => $this->request->getVar('nama'),
            'nama_instansi_opd' => $this->request->getVar('nama_instansi_opd'),
            'no_hp' => $this->request->getVar('no_hp'),
            'judul' => $this->request->getVar('judul'),
            'ringkasan' => $this->request->getVar('ringkasan'),
            'tahun_penerapan' => $this->request->getVar('tahun_penerapan'),
            'link' => $this->request->getVar('link'),
        ];

        $builder->where('id', $id)->update($data);
        return redirect()->to(site_url('pendaftar_Opd'))->with('pesan', 'Data Berhasil Diubah');
    }

    // menghapus data pendaftar OPD
    public function deletedataOpd($id)
    {
        if (!session('id')) {
            return redirect()->to(site_url('/login'));
        }

        if ($_SESSION['role'] !== 'admin') {
            return redirect()->to(site_url('user/user'));
        }
        $db      = \Config\Database::connect();
        $builder = $db->table('opd');

        $builder->where('id', $id)->delete();
        return redirect()->to(site_url('pendaftar_Opd'))->with('pesan', 'Data Berhasil Dihapus');
    }
}
