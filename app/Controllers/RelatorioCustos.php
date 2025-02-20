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
        return view('partials/header') . view('portalProdutor/relatorioCustos', [
            'custos' => $this->custos->findAll(),
        ]);
    }
}
