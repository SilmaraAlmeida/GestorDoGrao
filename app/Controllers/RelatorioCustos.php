<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Custos;
use CodeIgniter\HTTP\ResponseInterface;

class RelatorioCustos extends BaseController
{
    private $custos;

    public function __construct()
    {
        $dados = $this->custos = new Custos();
    }

    public function index()
    {
        $user_id = session()->get('user_id');
        $custos = $this->custos->where('user_id', $user_id)->findAll();

        return view('partials/header') . view('portalProdutor/relatorioCustos', [
            'custos' => $custos,
        ]);
    }
}
