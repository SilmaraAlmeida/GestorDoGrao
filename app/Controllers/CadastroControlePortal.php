<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProducaoCafe;
use CodeIgniter\HTTP\ResponseInterface;

class CadastroControlePortal extends BaseController
{
    public function index()
    {
        return view('partials/header') . view('portalProdutor/formRegistrarProducoes');
    }

    public function registrarProducoes()
    {

        // $producao = new ProducaoCafe();

        // $user_id = session()->get('user_id');

        // $data = $this->request->getPost();

        // $data['user_id'] = $user_id;

        // var_dump($data);
        // die();

        // $inserted = $estoque->insert($data);

        // if (!$inserted) {
        //     return redirect()->route('cadastrar_producao')->with('error', 'Ocorreu um erro o cadastrar a produção');
        // }

        // return redirect()->route('cadastrar_producao')->with('success', 'Produção cadastrada com sucesso');
    }

}
