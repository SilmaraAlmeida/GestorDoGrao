<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'HomeController::index');

$routes->get('/enviarEmail', 'EnviarEmailController::index',    ['as' => 'enviar_email']);
$routes->post('/enviarEmail', 'EnviarEmailController::store',   ['as' => 'enviar_email']);

$routes->get('/login', 'Login::index',              ['as' => 'login']);
$routes->post('/loginVrf', 'Login::verificarLogin', ['as' => 'verificar_login']);
$routes->get('/loginDestroy', 'Login::destroy', ['as' => 'login_destroy']);

$routes->get('/cadastrar', 'Cadastrar::index',    ['as' => 'cadastrar']);
$routes->post('/cadastrarDB', 'Cadastrar::store', ['as' => 'cadastrar_store']);



$routes->get('/cadastrarFornecedor', 'CadastrarFornecedor::index',    ['as' => 'cadastrar_fornecedor']);
$routes->post('/cadastrarFornecedorDB', 'CadastrarFornecedor::store', ['as' => 'cadastrar_fornecedor_store']);



$routes->get('/portalProdutor', 'PortalProdutor::index', ['as' => 'portal_produtor']);

$routes->get('/cadastrarProducao', 'CadastrarProducao::index', ['as' => 'cadastrar_producao']);
$routes->get('/cadastrarProducaoDB', 'CadastrarProducao::store', ['as' => 'cadastrar_producao_store']);
$routes->post('/cadastrarProducaoDB', 'CadastrarProducao::store', ['as' => 'cadastrar_producao_store']);

$routes->get('/compararFornecedores', 'CompararFornecedores::index', ['as' => 'comparar_fornecedores']);

$routes->get('/monitorarProgresso', 'MonitorarProgresso::index', ['as' => 'monitorar_progresso']);
