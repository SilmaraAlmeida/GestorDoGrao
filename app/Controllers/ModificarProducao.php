<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProducaoCafe;

class ModificarProducao extends BaseController
{
    private $producao;

    public function __construct()
    {
        $this->producao = new ProducaoCafe();
    }

    public function index()
    {
        $user_id = session()->get('user_id');
        $producoes = $this->producao->where('user_id', $user_id)->findAll();

        return view('partials/header') . view('portalProdutor/modificarProducoes', [
            'producoes' => $producoes,
        ]);
    }

    public function cadastrar()
    {
        $producao = new ProducaoCafe();

        $user_id = session()->get('user_id');

        $data = $this->request->getPost();

        $data['user_id'] = $user_id;

        $inserted = $producao->insert($data);

        if (!$inserted) {
            return redirect()->route('form_producao')->with('error', 'Ocorreu um erro o cadastrar a produção');
        }

        return redirect()->route('form_producao')->with('success', 'Produção cadastrada com sucesso');
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
