<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'HomeController::index');

$routes->get('/enviarEmail', 'EnviarEmailController::index',    ['as' => 'enviar_email']);
$routes->post('/enviarEmail', 'EnviarEmailController::store',   ['as' => 'enviar_email']);

// LOGIN  E CADASTRO DE PRODUTORES
$routes->get('/login', 'Login::index',              ['as' => 'login']);
$routes->get('/formlogin', 'Login::formLogin',              ['as' => 'form_login']);
$routes->post('/loginVrf', 'Login::verificarLogin', ['as' => 'verificar_login']);
$routes->get('/loginDestroy', 'Login::destroy', ['as' => 'login_destroy']);

$routes->get('/cadastrar', 'Cadastrar::index',    ['as' => 'cadastrar']);
$routes->post('/cadastrarDB', 'Cadastrar::store', ['as' => 'cadastrar_store']);

// CHAMA O PORTAL DO PRODUTOR
$routes->get('/portalProdutor', 'PortalProdutor::index', ['as' => 'portal_produtor']);

// ROTAS DA NAVBAR LATERAL DO PRODUTOR
$routes->get('/portalProdutor/registrarProducoes', 'CadastroControlePortal::registrarProducoes', ['as' => 'registrar_producao']);
$routes->get('/portalProdutor/historicoProducoes', 'CadastroControlePortal::historicoProducoes', ['as' => 'historico_producao']);

$routes->get('/portalProdutor/analiseProdutividade', 'RelatorioAnalisePortal::analiseProdutividade', ['as' => 'analise_produtividade']);
$routes->get('/portalProdutor/analiseMercado', 'RelatorioAnalisePortal::analiseMercado', ['as' => 'analise_mercado']);

$routes->get('/portalProdutor/registroCustos', 'CustosPortal::registroCustos', ['as' => 'registro_custos']);
$routes->get('/portalProdutor/relatorioCustos', 'CustosPortal::relatorioCustos', ['as' => 'relatorio_custos']);
