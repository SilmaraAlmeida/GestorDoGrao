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

// OPÇÕES DA NAVBAR DO PRODUTOR
$routes->get('/cadastrarProducao', 'CadastrarProducao::index', ['as' => 'cadastrar_producao']);
$routes->post('/cadastrarProducaoDB', 'CadastrarProducao::store', ['as' => 'cadastrar_producao_store']);

$routes->get('/compararFornecedores', 'CompararFornecedores::index', ['as' => 'comparar_fornecedores']);

$routes->get('/monitorarProgresso', 'MonitorarProgresso::index', ['as' => 'monitorar_progresso']);

