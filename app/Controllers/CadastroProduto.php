<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Estoque;
use CodeIgniter\HTTP\ResponseInterface;

class CadastroProduto extends BaseController
{
    public function index()
    {
        //
    }

    public function cadastroProduto()
    {
        $estoque = new Estoque();
        $inserted = $estoque->insert($this->request->getPost());

        if (!$inserted) {
            return redirect()->route('chamar_cadastro')->with('error', 'Ocorreu um erro o cadastrar o produto');
        }

        return redirect()->route('chamar_cadastro')->with('success', 'Produto cadastrado com sucesso');
    }
}
