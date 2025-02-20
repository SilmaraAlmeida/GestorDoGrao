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
$routes->get('/portalProdutor/registrarProducoes', 'NavbarPortal::chamarRegistrarProducoes',     ['as' => 'chamar_registrar']);
$routes->get('/portalProdutor/cadastrarVendas', 'NavbarPortal::chamarCadastrarVendas',           ['as' => 'chamar_vendas']);
$routes->get('/portalProdutor/controleEstoque', 'NavbarPortal::chamarControleEstoque',           ['as' => 'chamar_estoque']);
$routes->get('/portalProdutor/historicoProducoes', 'NavbarPortal::chamarHistoricoProducao',      ['as' => 'chamar_historico']);
$routes->get('/portalProdutor/analiseProdutividade', 'NavbarPortal::chamarAnaliseProdutividade', ['as' => 'chamar_produtividade']);
$routes->get('/portalProdutor/analiseMercado', 'NavbarPortal::chamarAnaliseMercado',             ['as' => 'chamar_mercado']);
$routes->get('/portalProdutor/registroCustos', 'NavbarPortal::chamarRegistroCustos',             ['as' => 'chamar_custos']);
$routes->get('/portalProdutor/relatorioCustos', 'NavbarPortal::chamarRelatorioCustos',           ['as' => 'chamar_relatorio_custos']);
$routes->get('/portalProdutor/monitoramento', 'NavbarPortal::chamarMonitoramento',               ['as' => 'chamar_monitoramento']);
$routes->get('/portalProdutor/configuracao', 'NavbarPortal::chamarConfiguracao',                 ['as' => 'chamar_configuracao']);
$routes->get('/portalProdutor/perfil', 'NavbarPortal::chamarPerfil',                             ['as' => 'chamar_perfil']);

// FUNCIONALIDADES DAS NAVBAR LATERAL DO PRODUTOR
$routes->post('/portalProdutor/registrarProducoes/cadastrar', 'ModificarProducao::cadastrar', ['as' => 'cadastrar_producao']);
$routes->get('/portalProdutor/modificar', 'ModificarProducao::index', ['as' => 'form_producao']);

// CRUD DA OPÇÃO 'MODIFICAR PRODUCOES' NA NAVBAR DO PRODUTOR
$routes->get('/portalProdutor/formVisualizarProducao/(:any)', 'ModificarProducao::visualizar/$1');

$routes->get('/portalProdutor/formEditarProducao/(:any)', 'ModificarProducao::editar/$1', ['as' => 'form_editar_producao']);
$routes->post('/portalProdutor/formEditarProducao/(:any)', 'ModificarProducao::update/$1', ['as' => 'form_editar_producao']);
$routes->get('/portalProdutor/deletarProducao/(:any)', 'ModificarProducao::deletar/$1', ['as' => 'deletar_producao']);

// OPÇÃO 'CONTROLE DE CUSTOS' NA NAVBAR DO PRODUTOR
$routes->post('/portalProdutor/registroCustosStore', 'RegistroCustos::CadastrarGastos', ['as' => 'cadastrar_gastos']);
