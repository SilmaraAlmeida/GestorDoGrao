<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Custos;
use App\Models\ProducaoCafe;
use App\Models\User;
use App\Models\Vendas;
use CodeIgniter\HTTP\ResponseInterface;

class Monitoramento extends BaseController
{
    private $usuarios;
    private $producao;

    public function __construct()
    {
        $this->usuarios = new User();
        $this->producao = new ProducaoCafe();
    }

    public function chamarMonitoramento()
    {
        $user_id = session()->get('user_id');

        $usuario = $this->getUsuario($user_id);
        $producao = $this->getProducao($user_id);

        return view('partials/header') . view('portalProdutor/monitoramento', [
            'usuarios' => $usuario,
            'producoes' => $producao,
        ]);
    }

    private function getUsuario($user_id)
    {
        return $this->usuarios->where('id', $user_id)->findAll();
    }

    private function getProducao($user_id)
    {
        return $this->producao->where('user_id', $user_id)->findAll();
    }
}
