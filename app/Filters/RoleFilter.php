<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\Config\Services;

class RoleFilter implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        $session = Services::session();

        // Periksa peran pengguna yang disimpan dalam sesi
        $role = $session->get('role');

        // Jika pengguna bukan admin dan mencoba mengakses halaman admin,
        // arahkan kembali ke halaman login atau halaman yang sesuai
        if ($role !== 'admin' && $request->uri->getPath() === 'admin') {
            return redirect()->to('/user');
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Tidak ada yang perlu dilakukan setelah request
    }
}
