<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProducaoCafe;
use CodeIgniter\HTTP\ResponseInterface;

class CadastrarProducao extends BaseController
{
    public function index()
    {
        //
    }

    public function cadastrar()
    {

        $producao = new ProducaoCafe();
        $inserted = $producao->insert($this->request->getPost());

        if (!$inserted) {
            return redirect()->route('chamar_registrar')->with('error', 'Não foi possivel cadastrar a produção, tente novamente');
        }

        return redirect()->route('chamar_registrar')->with('success', 'Produção cadastrada com sucesso!');
    }
}
