<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\User;
use CodeIgniter\HTTP\ResponseInterface;

class Cadastrar extends BaseController
{
    public function index()
    {
        return view('partials/header') . view('partials/cadastro');
    }

    public function store()
    {
        $user = new User();
        $inserted = $user->insert($this->request->getPost());

        if (!$inserted) {
            return redirect()->route('cadastrar')->with('error', 'Ocorreu um erro o cadastrar o usuário');
        }

        return redirect()->route('cadastrar')->with('success', 'Usuário cadastrado com sucesso');
    }
}
