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
        $user_id = session()->get('user_id');
        $estoque = $this->estoque->where('id_usuario', $user_id)->findAll();

        return view('partials/header') . view('portalProdutor/estoqueAtual', [
            'dados' => $estoque
        ]);
    }
}
