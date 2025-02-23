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
        $custos = new Custos();

        $user_id = session()->get('user_id');

        $data = $this->request->getPost();

        $data['user_id'] = $user_id;

        $inserted = $custos->insert($data);
    
        if (!$inserted) {
            return redirect()->route('chamar_custos')->with('error', 'Ocorreu um erro o cadastrar os valores');
        }
    
        return redirect()->route('chamar_custos')->with('success', 'Valores cadastrados com sucesso');
    }
}
