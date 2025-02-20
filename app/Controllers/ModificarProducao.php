<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Historico;
use App\Models\ProducaoCafe;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Model;

class ModificarProducao extends BaseController
{
    private $producao;

    public function __construct()
    {
        $dados = $this->producao = new ProducaoCafe();
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

    public function visualizar($id)
    {
        return view('portalProdutor/formViewsProducoes', [
            'producoes' => $this->producao->find($id),
        ]);
    }

    public function editar($id)
    {

        return view('portalProdutor/formEditarProducoes', [
            'producoes' => $this->producao->find($id),
        ]);
    }

    public function update()
    {
        $producao = new ProducaoCafe();

        $producao->save($this->request->getPost());

        return redirect()->route('form_producao');
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
