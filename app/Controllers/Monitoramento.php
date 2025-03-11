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

    private $faturamentos;
    private $custos;

    public function __construct()
    {
        $this->usuarios = new User();
        $this->producao = new ProducaoCafe();

        $this->faturamentos = new Custos();
        $this->custos = new Vendas();
    }

    public function chamarMonitoramento()
    {
        $user_id = session()->get('user_id');

        $usuario = $this->getUsuario($user_id);
        $producao = $this->getProducao($user_id);

        $faturamentos = json_encode($this->getFaturamento($user_id));
        $custos = json_encode($this->getPerda($user_id));

        $dadosChartsJS = [
            'faturamento' => $faturamentos,
            'custos' => $custos,
        ];

        // echo '<pre>';
        // var_dump($dadosChartsJS);
        // echo '</pre>';

        return view('partials/header') . view('portalProdutor/monitoramento', [
            'usuarios' => $usuario,
            'producoes' => $producao,
            'dadosCharts' => $dadosChartsJS,
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

    // public function dadosCharts() {
    //     $user_id = session()->get('user_id');

    //     $faturamentos = json_encode($this->getFaturamento($user_id));
    //     $custos = json_encode($this->getPerda($user_id));

    //     $dadosChartsJS = [
    //         'faturamento' => $faturamentos,
    //         'custos' => $custos,
    //     ];

    //     return $dadosChartsJS;
    // }

    private function getFaturamento($user_id)
    {
        return $this->faturamentos->where('user_id', $user_id)->findAll();
    }

    public function getPerda($user_id)
    {
        return $this->custos->where('user_id', $user_id)->findAll();
    }
}
