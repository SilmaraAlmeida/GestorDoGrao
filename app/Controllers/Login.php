<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Login extends BaseController
{
    public function index()
    {
        return view('partials/header') . view('partials/login');
    }

    public function verificarLogin()
    {
        var_dump('logado com sucesso');

        // return view('painelDoProdutor');
    }
}
