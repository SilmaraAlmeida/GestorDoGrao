<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Vendas;
use CodeIgniter\HTTP\ResponseInterface;

class HistoricoVendas extends BaseController
{
    private $vendas;

    public function __construct()
    {
        $dados = $this->vendas = new Vendas();
    }

    public function index()
    {
        //
    }

    public function historicoVendas()
    {
        return view('partials/header') . view('portalProdutor/historicoVendas', [
            'vendas' => $this->vendas->findAll(),
        ]);
    }
}
