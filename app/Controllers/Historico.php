<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Historico as ModelsHistorico;
use CodeIgniter\HTTP\ResponseInterface;

class Historico extends BaseController
{
    public function index()
    {
        //
    }
    
    public function historico($dados)
    {
        $historico = new ModelsHistorico();

        return $historico->insert('historico', $dados);

    }
}
