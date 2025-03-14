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
        $user_id = session()->get('user_id');
        $vendas = $this->vendas->where('id_usuario', $user_id)->findAll();

        return view('partials/header') . view('portalProdutor/historicoVendas', [
            'vendas' => $vendas,
        ]);
    }
}
