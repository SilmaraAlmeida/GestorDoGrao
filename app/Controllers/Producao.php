<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProducaoCafe;
use CodeIgniter\HTTP\ResponseInterface;

class Producao extends BaseController
{
    private $producao;

    public function __construct()
    {
        $this->producao = new ProducaoCafe();
    }

    public function index()
    {
        return view('partials/header') . view('portalProdutor/modificarProducoes', [
            'producoes' => $this->producao->findAll(),
        ]);
    }

    public function cadastrar()
    {
        $producao = new ProducaoCafe();
        $inserted = $producao->insert($this->request->getPost());

        if (!$inserted) {
            return redirect()->route('chamar_registrar')->with('error', 'Não foi possivel cadastrar a produção, tente novamente');
        }

        return redirect()->route('chamar_registrar')->with('success', 'Produção cadastrada com sucesso!');
    }

    public function editar($id)
    {
        $producao = $this->producao->find($id);
    
        if (!$producao) {
            var_dump('não foi encontrado');
            die();
        }
    
        return view('partials/header') . view('portalProdutor/formEditarProducoes', [
            'producoes' => $producao,
        ]);
    }    

    public function deletar($id)
    {
        $deleted = $this->producao->delete($id);

        if (!$deleted) {
            return redirect()->route('form_producao')->with('error', 'Não foi possível excluir, tente novamente');
        }

        return redirect()->route('form_producao')->with('success', 'Produção excluida com suceso!');
    }
}
