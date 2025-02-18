<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class NavbarPortal extends BaseController
{
    public function index()
    {
        var_dump('entrou no controller');
    }

    public function chamarRegistrarProducoes()
    {
        return view('partials/header') . view('portalProdutor/formRegistrarProducoes');
    }

    public function chamarCadastrarVendas()
    {
        return view('partials/header') . view('portalProdutor/cadastrarVendas');
    }

    public function chamarControleEstoque()
    {
        return view('partials/header') . view('portalProdutor/controleEstoque');
    }

    public function chamarHistoricoProducao()
    {
        return view('partials/header') . view('portalProdutor/historicoProducoes');
    }

    public function chamarAnaliseProdutividade()
    {
        return view('partials/header') . view('portalProdutor/analiseProdutividade');
    }

    public function chamarAnaliseMercado()
    {
        return view('partials/header') . view('portalProdutor/analiseMercado');
    }

    public function chamarRegistroCustos()
    {
        return view('partials/header') . view('portalProdutor/registroCustos');
    }

    public function chamarRelatorioCustos()
    {
        return view('partials/header') . view('portalProdutor/relatorioCustos');
    }

    public function chamarMonitoramento()
    {
        return view('partials/header') . view('portalProdutor/monitoramento');
    }

    public function chamarConfiguracao()
    {
        return view('partials/header') . view('portalProdutor/configuracao');
    }

    public function chamarPerfil()
    {
        return view('partials/header') . view('portalProdutor/perfil');
    }
}
