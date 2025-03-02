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
$routes->get('/portalProdutor/analiseProdutividade', 'NavbarPortal::chamarAnaliseProdutividade', ['as' => 'chamar_produtividade']);
$routes->get('/portalProdutor/analiseMercado', 'NavbarPortal::chamarAnaliseMercado',             ['as' => 'chamar_mercado']);
$routes->get('/portalProdutor/registroCustos', 'NavbarPortal::chamarRegistroCustos',             ['as' => 'chamar_custos']);
$routes->get('/portalProdutor/configuracao', 'NavbarPortal::chamarConfiguracao',                 ['as' => 'chamar_configuracao']);
$routes->get('/portalProdutor/perfil', 'NavbarPortal::chamarPerfil',                             ['as' => 'chamar_perfil']);
$routes->get('/portalProdutor/cadastroProduto', 'NavbarPortal::chamarCadastro',                  ['as' => 'chamar_cadastro']);

// FUNCIONALIDADES DAS NAVBAR LATERAL DO PRODUTOR
$routes->post('/portalProdutor/registrarProducoes/cadastrar', 'ModificarProducao::cadastrar', ['as' => 'cadastrar_producao']);
$routes->get('/portalProdutor/registrarProducoes/cadastrar', 'ModificarProducao::cadastrar', ['as' => 'form_cadastrar_producao']);

$routes->get('/portalProdutor/modificar', 'ModificarProducao::index', ['as' => 'form_producao']);

// CRUD DA OPÇÃO 'MODIFICAR PRODUCOES' NA NAVBAR DO PRODUTOR
$routes->get('/portalProdutor/formVisualizarProducao/(:any)', 'ModificarProducao::visualizar/$1');

$routes->get('/portalProdutor/formEditarProducao/(:any)', 'ModificarProducao::editar/$1', ['as' => 'form_editar_producao']);
$routes->post('/portalProdutor/formEditarProducao/(:any)', 'ModificarProducao::update/$1', ['as' => 'form_editar_producao']);
$routes->get('/portalProdutor/deletarProducao/(:any)', 'ModificarProducao::deletar/$1', ['as' => 'deletar_producao']);

// OPÇÃO 'CONTROLE DE CUSTOS' NA NAVBAR DO PRODUTOR
$routes->post('/portalProdutor/registroCustosStore', 'RegistroCustos::CadastrarGastos', ['as' => 'cadastrar_gastos']);
$routes->get('/portalProdutor/relatorioCustos', 'RelatorioCustos::index', ['as' => 'relatorio_custos']);

// OPÇÃO 'VENDAS' NA NAVBAR DO PRODUTOR
$routes->post('/portalProdutor/registrarVendas', 'Vendas::cadastrarVendas', ['as' => 'cadastrar_vendas']);

$routes->get('/portalProdutor/historicoVendas', 'HistoricoVendas::historicoVendas', ['as' => 'historico_vendas']);

// OPÇÃO 'CONTROLE DE ESTOQUE' NA NAVBAR DO PRODUTOR
$routes->post('/portalProdutor/formCadastroProduto', 'CadastroProduto::cadastroProduto', ['as' => 'cadastro_produto']);

$routes->get('/portalProdutor/estoqueAtual', 'EstoqueAtual::estoqueAtual', ['as' => 'estoque_atual']);

// OPÇÃO 'MONITORAMENTO' NA NAVBAR DO PRODUTOR
$routes->get('/portalProdutor/monitoramento', 'Monitoramento::chamarMonitoramento', ['as' => 'chamar_monitoramento']);
// $routes->get('/portalProdutor/monitoramento', 'NavbarPortal::chamarMonitoramento', ['as' => 'chamar_monitoramento']);


$routes->get('/portalProdutor/historicoProducoes', 'Historico::chamarHistoricoProducao',      ['as' => 'chamar_historico']);
