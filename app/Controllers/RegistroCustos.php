<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Custos;
use CodeIgniter\HTTP\ResponseInterface;

class RegistroCustos extends BaseController
{
    public function index()
    {
        //
    }

    public function CadastrarGastos()
    {
        var_dump('cadastrar gastos');

        $custos = new Custos();
        $inserted = $custos->insert($this->request->getPost());
    
        if (!$inserted) {
            return redirect()->route('chamar_custos')->with('error', 'Ocorreu um erro o cadastrar os valores');
        }
    
        return redirect()->route('chamar_custos')->with('success', 'Valores cadastrados com sucesso');
    }
}
