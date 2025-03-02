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

    public function chamarHistoricoProducao()
    {
        $historicoModel = new ModelsHistorico();
        
        $user_id = session()->get('user_id');
        $estoque = $historicoModel->where('alterado_por', $user_id)->orderBy('id', 'desc')->findAll();
    
        return view('partials/header') . view('portalProdutor/historicoProducoes', [
            'historico' => $estoque
        ]);
    }

}
