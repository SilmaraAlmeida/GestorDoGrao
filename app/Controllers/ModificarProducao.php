<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\MetodosCultivo;
use App\Models\ProducaoCafe;
use App\Models\TipoCafe;

class ModificarProducao extends BaseController
{
    private $producao;
    private $tipo_cafe;
    private $metodos_cultivo;

    public function __construct()
    {
        $this->producao = new ProducaoCafe();
        $this->tipo_cafe = new TipoCafe();
        $this->metodos_cultivo = new MetodosCultivo();
    }

    public function index()
    {
        $user_id = session()->get('user_id');
        $producoes = $this->producao->where('id_usuario', $user_id)->findAll();

        return view('partials/header') . view('portalProdutor/modificarProducoes', [
            'producoes' => $producoes,
        ]);
    }

    public function chamarRegistrarProducoes()
    {
        return view('partials/header') . view('portalProdutor/formRegistrarProducoes', [
            'metodos_cultivo' => $this->metodos_cultivo->findAll(),
            'tipos_cafe' => $this->tipo_cafe->findAll(),
        ]);
    }

    public function cadastrar()
    {
        $producao = new ProducaoCafe();

        // $user_id = session()->get('user_id');

        $data = $this->request->getPost();

        // $data['user_id'] = $user_id;p

        $inserted = $producao->insert($data);

        if (!$inserted) {
            return redirect()->route('form_producao')->with('error', 'Ocorreu um erro o cadastrar a produção');
        }

        return redirect()->route('form_producao', [
            'metodos_cultivo' => $this->metodos_cultivo->findAll(),
        ])->with('success', 'Produção cadastrada com sucesso');
    }

    public function visualizar($id)
    {
        return view('portalProdutor/formViewsProducoes', [
            'producoes' => $this->producao->find($id),
            'metodos_cultivo' => $this->metodos_cultivo->findAll(),
            'tipos_cafe' => $this->tipo_cafe->findAll(),
        ]);
    }

    public function editar($id)
    {
        return view('portalProdutor/formEditarProducoes', [
            'producoes' => $this->producao->find($id),
            'metodos_cultivo' => $this->metodos_cultivo->findAll(),
            'tipos_cafe' => $this->tipo_cafe->findAll(),
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
