<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Fornecedor;
use CodeIgniter\HTTP\ResponseInterface;

class CadastrarFornecedor extends BaseController
{
    public function index()
    {
        return view('partials/header') . view('partials/cadastrarFornecedor');
    }

    public function store()
    {
        $fornecedor = new Fornecedor();
        $inserted = $fornecedor->insert($this->request->getPost());

        if (!$inserted) {
            return redirect()->route('cadastrar_fornecedor')->with('error', 'Ocorreu um erro o cadastrar a empresa');
        }

        return redirect()->route('cadastrar_fornecedor')->with('success', 'Empresa cadastrada com sucesso');
    }
}
