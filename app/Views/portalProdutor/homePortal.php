<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal do Produtor</title>

    <link rel="stylesheet" href="https://cdn.lineicons.com/5.0/lineicons.css" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <link rel="stylesheet" href=" <?= base_url('css/sidebar-portal.css') ?> ">
    <link rel="stylesheet" href=" <?= base_url('css/navbar-portal.css') ?> ">
    <link rel="stylesheet" href=" <?= base_url('css/monitoramento.css') ?> ">

</head>

<body>
    <div class="wrapper">
        <aside id="sidebar">
            <div class="d-flex justify-content-between p-4">
                <div class="sidebar-logo">
                    <a href="<?= url_to('portal_produtor') ?>">Gestor do Grão</a>
                </div>
                <button class="toggle-btn border-0" type="button"><i class='bx bxs-chevrons-right' id="icon"></i></button>
            </div>
            <ul class="sidebar-nav">
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link collapsed has-dropdown" data-bs-toggle="collapse" data-bs-target="#auth" aria-expanded="false" aria-controls="auth">
                        <i class='bx bxs-user-detail'></i>
                        <span>Produção</span>
                    </a>
                    <ul class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar" id="auth">
                        <li class="sidebar-item">
                            <a href="<?= url_to('chamar_registrar') ?>" class="sidebar-link">
                                Registrar Produções
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="<?= url_to('form_producao') ?>" class="sidebar-link">
                                Modificar Produções
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="<?= url_to('chamar_historico') ?>" class="sidebar-link">
                                Histórico de Produção
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link collapsed has-dropdown" data-bs-toggle="collapse" data-bs-target="#vendas" aria-expanded="false" aria-controls="vendas">
                        <i class='bx bxs-cart-add'></i>
                        <span>Vendas</span>
                    </a>
                    <ul class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar" id="vendas">
                        <li class="sidebar-item">
                            <a href="<?= url_to('chamar_vendas') ?>" class="sidebar-link">
                                Registrar Vendas
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="<?= url_to('historico_vendas') ?>" class="sidebar-link">
                                Vendas Registradas
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link collapsed has-dropdown" data-bs-toggle="collapse" data-bs-target="#estoque" aria-expanded="false" aria-controls="estoque">
                        <i class='bx bxs-box'></i>
                        <span>Controle de Estoque</span>
                    </a>
                    <ul class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar" id="estoque">
                        <li class="sidebar-item">
                            <a href="<?= url_to('chamar_cadastro') ?>" class="sidebar-link">
                                Cadastro de Produtos
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="<?= url_to('estoque_atual') ?>" class="sidebar-link">
                                Estoque Atual
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link collapsed has-dropdown" data-bs-toggle="collapse" data-bs-target="#analise" aria-expanded="false" aria-controls="analise">
                        <i class='bx bxs-bar-chart-alt-2'></i>
                        <span>Relatórios e Análise</span>
                    </a>
                    <ul class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#produtividade" id="analise">
                        <li class="sidebar-item">
                            <a href="<?= url_to('chamar_produtividade') ?>" class="sidebar-link">
                                Análise de Produtividade
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="<?= url_to('chamar_mercado') ?>" class="sidebar-link">
                                Análise de Mercado
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link collapsed has-dropdown" data-bs-toggle="collapse" data-bs-target="#controleCustos" aria-expanded="false" aria-controls="controleCustos">
                        <i class='bx bxs-wallet'></i>
                        <span>Controle de Custos</span>
                    </a>
                    <ul class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar" id="controleCustos">
                        <li class="sidebar-item">
                            <a href="<?= url_to('chamar_custos') ?>" class="sidebar-link">
                                Registro de Custos
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="<?= url_to('relatorio_custos') ?>" class="sidebar-link">
                                Relatório de Custos
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="sidebar-item">
                    <a href="<?= url_to('chamar_monitoramento') ?>" class="sidebar-link">
                        <i class='bx bxs-binoculars'></i>
                        <span>Monitoramento</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="<?= url_to('chamar_configuracao') ?>" class="sidebar-link">
                        <i class='bx bx-cog'></i>
                        <span>Config</span>
                    </a>
                </li>
            </ul>
            <div class="sidebar-footer">
                <a href="<?= url_to('chamar_perfil') ?>" class="sidebar-link">
                    <i class='bx bx-user'></i>
                    <span>Perfil</span>
                </a>
                <a href="<?= url_to('login_destroy') ?>" class="sidebar-link">
                    <i class='bx bx-log-out'></i>
                    <span>Logout</span>
                </a>
            </div>
        </aside>
        <div class="main">
            <nav class="navbar navbar-expand px-4 py-3">
                <form action="#" class="d-none d-sm-inline-block">
                    <div class="input-group input-group-navbar">
                        <input type="text" class="form-control border-0 rounded-0 pe-0" placeholder="Pesquisar..." aria-label="Pesquisar">
                        <button class="btn border-0 rounded-0" type="button"><i class='bx bx-search'></i></button>
                    </div>
                </form>

                <div class="navbar-collapse collapse">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link d-flex align-items-center" data-bs-toggle="dropdown">
                                <span class="me-2"><?php echo session()->get('user')->nome ?></span>
                                <img src="<?= base_url('uploads/user-sem-foto.png') ?>" class="avatar img-fluid" alt="">
                            </a>
                            <div class="dropdown-menu dropdown-menu-end rounded-0 border-0 shadow mt-3">
                                <a href="#" class="dropdown-item">
                                    <i class='bx bx-data'></i>
                                    <span>Seu Perfil</span>
                                </a>
                                <a href="#" class="dropdown-item">
                                    <i class='bx bx-cog'></i>
                                    <span>Config</span>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item">
                                    <i class='bx bx-circle'></i>
                                    <span>Central de Ajuda</span>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
                <p>user_name: <?php echo session()->get('user')->nome ?> <br> user_id: <?php echo session()->get('user_id') ?></p>

                <?= $this->renderSection('content') ?>

            <body class="d-flex flex-column min-vh-100">
                <footer class="footer mt-auto py-3 bg-light">
                    <div class="container-fluid">
                        <div class="row text-body-secondary">
                            <div class="col-6 text-start">
                                <a href="#" class="text-body-secondary">
                                    <strong>Gestor do Grão</strong>
                                </a>
                            </div>
                            <div class="col-6 text-end text-body-secondary d-none d-md-block">
                                <ul class="list-inline mb-0">
                                    <li class="list-inline-item">
                                        <a href="#" class="text-body-secondary">Contato</a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#" class="text-body-secondary">Sobre</a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#" class="text-body-secondary">Termos & Condições</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </footer>
            </body>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <!-- CHART JS -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script src=" <?= base_url('js/navbar-portal.js') ?> "></script>
    <script src=" <?= base_url('js/monitoramento.js') ?> "></script>

</body>

</html>