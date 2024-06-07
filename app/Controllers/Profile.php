<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Profile extends BaseController
{
    public function index()
    {
        $username = $this->request->getPost('username');
        dd($username);
        return view('profile.php');
    }
}
