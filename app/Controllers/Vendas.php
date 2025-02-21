<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Vendas as ModelsVendas;
use CodeIgniter\HTTP\ResponseInterface;

class Vendas extends BaseController
{
    public function index()
    {
        //
    }
    
    public function cadastrarVendas()
    {
        $vendas = new ModelsVendas();
        $inserted = $vendas->insert($this->request->getPost());
    
        if (!$inserted) {
            return redirect()->route('chamar_vendas')->with('error', 'Ocorreu um erro o cadastrar a venda');
        }
    
        return redirect()->route('chamar_vendas')->with('success', 'Venda cadastrada com sucesso');
    }
}
