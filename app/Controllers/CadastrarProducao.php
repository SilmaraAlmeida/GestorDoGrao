<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProducaoCafe;
use CodeIgniter\HTTP\ResponseInterface;

class CadastrarProducao extends BaseController
{
    public function index()
    {
        return view('partials/header') . view('portalProdutor/formCadastroProducao');
    }

    public function store()
    {
        $producao = new ProducaoCafe();
        $inserted = $producao->insert($this->request->getPost());

        if (!$inserted) {
            return redirect()->route('cadastrar_producao')->with('error', 'Ocorreu um erro o cadastrar a produção');
        }

        return redirect()->route('cadastrar_producao')->with('success', 'Produção cadastrada com sucesso');
    }
}
