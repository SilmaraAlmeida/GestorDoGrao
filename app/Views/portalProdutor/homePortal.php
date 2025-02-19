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

    <link rel="stylesheet" href=" <?= base_url('css/navbar-portal.css') ?> ">
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
                        <span>Cadastro e Controle</span>
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
                    <a href="<?= url_to('chamar_vendas') ?>" class="sidebar-link">
                        <i class='bx bxs-cart-add'></i>
                        <span>Cadastro de Vendas</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="<?= url_to('chamar_estoque') ?>" class="sidebar-link">
                        <i class='bx bxs-box'></i>
                        <span>Controle de Estoque</span>
                    </a>
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
                            <a href="<?= url_to('chamar_relatorio_custos') ?>" class="sidebar-link">
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
        <div class="main container">
            <p class="text text-center">Olá, <?php echo session()->get('user')->nome ?>!</p>
            <?= $this->renderSection('content') ?>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <script src=" <?= base_url('js/navbar-portal.js') ?> "></script>
</body>

</html>