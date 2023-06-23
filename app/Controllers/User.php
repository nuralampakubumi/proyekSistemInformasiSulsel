<?php

namespace App\Controllers;

class User extends BaseController
{
    public function user()
    {
        if (!session('id')) {
            return redirect()->to(site_url('home/login'));
        }

        if ($_SESSION['role'] !== 'juri') {
            return redirect()->to(site_url('admin/dashboard'));
        }
        $data = [
            'title' => 'Dahsboard',
        ];
        return view('user/dashboard', $data);
    }

    // menampilkan pendaftar SMA
    public function pendaftar_Sma()
    {
        if (!session('id')) {
            return redirect()->to(site_url('home/login'));
        }

        if ($_SESSION['role'] !== 'juri') {
            return redirect()->to(site_url('admin/dashboard'));
        }
        $db      = \Config\Database::connect();
        $builder = $db->table('sma');
        $query   = $builder->get()->getResult();
        $data = [
            'title' => 'Pendaftar SMA/SMK/Sederajat',
            'result' => $query,
        ];
        return view('user/pendaftarSma', $data);
    }


    // menampilkan data pendaftar Opd
    public function pendaftar_Opd()
    {
        if (!session('id')) {
            return redirect()->to(site_url('home/login'));
        }

        if ($_SESSION['role'] !== 'juri') {
            return redirect()->to(site_url('admin/dashboard'));
        }
        $db      = \Config\Database::connect();
        $builder = $db->table('opd');
        $query   = $builder->get()->getResult();
        $data = [
            'title' => 'Pendaftar OPD',
            'result' => $query,
        ];
        return view('user/pendaftarOpd', $data);
    }

    // menampilkan form edit data dalam bentuk modal
    public function editStatusSma($id)
    {
        if (!session('id')) {
            return redirect()->to(site_url('/login'));
        }

        if ($_SESSION['role'] !== 'juri') {
            return redirect()->to(site_url('user/user'));
        }
        $db      = \Config\Database::connect();
        $builder = $db->table('sma');
        $record   = $builder->where('id', $id)->get()->getRow();
        $data = [
            'title' => 'Edit Data',
            'record' => $record,
        ];
        return view('user/editStatusSma', $data);
    }

    public function updateStatusSma()
    {
        if (!session('id')) {
            return redirect()->to(site_url('/login'));
        }

        if ($_SESSION['role'] !== 'juri') {
            return redirect()->to(site_url('user/user'));
        }
        $db      = \Config\Database::connect();
        $builder = $db->table('sma');

        $id = $this->request->getPost('id');
        $data = [
            'id' => $id,
            'status' => $this->request->getVar('status'),
        ];

        $builder->where('id', $id)->update($data);
        return redirect()->to(site_url('user/pendaftar_Sma'))->with('pesan', 'Data Berhasil Diubah');
    }

    public function editStatusOpd($id)
    {
        if (!session('id')) {
            return redirect()->to(site_url('/login'));
        }

        if ($_SESSION['role'] !== 'juri') {
            return redirect()->to(site_url('user/user'));
        }
        $db      = \Config\Database::connect();
        $builder = $db->table('opd');
        $record   = $builder->where('id', $id)->get()->getRow();
        $data = [
            'title' => 'Edit Data',
            'record' => $record,
        ];
        return view('user/editStatusOpd', $data);
    }

    public function updateStatusOpd()
    {
        if (!session('id')) {
            return redirect()->to(site_url('/login'));
        }

        if ($_SESSION['role'] !== 'juri') {
            return redirect()->to(site_url('user/user'));
        }
        $db      = \Config\Database::connect();
        $builder = $db->table('opd');

        $id = $this->request->getPost('id');
        $data = [
            'id' => $id,
            'status' => $this->request->getVar('status'),
        ];

        $builder->where('id', $id)->update($data);
        return redirect()->to(site_url('user/pendaftar_Opd'))->with('pesan', 'Data Berhasil Diubah');
    }
}
