<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Estoque;
use CodeIgniter\HTTP\ResponseInterface;

class EstoqueAtual extends BaseController
{
    private $estoque;

    public function __construct()
    {
        $dados = $this->estoque = new Estoque();
    }

    public function index()
    {
        //
    }

    public function estoqueAtual()
    {
        return view('partials/header') . view('portalProdutor/estoqueAtual', [
            'dados' => $this->estoque->findAll()
        ]);
    }
}
