<!DOCTYPE html>
<html lang="en">

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
            <div class="d-flex justfy-content-between p-4">
                <div class="sidebar-logo">
                    <a href="#">Gestor</a>
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
                            <a href="" class="sidebar-link">
                                Registrar Produções
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="" class="sidebar-link">
                                Histórico de Produção
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link">
                        <i class='bx bxs-cart-add'></i>
                        <span>Cadastro de Vendas</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link">
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
                            <a href="" class="sidebar-link">
                                Análise de Produtividade
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="" class="sidebar-link">
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
                            <a href="" class="sidebar-link">
                                Registro de Custos
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="" class="sidebar-link">
                                Relatório de Custos
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="sidebar-item">
                    <a href="#" class="sidebar-link">
                        <i class='bx bxs-binoculars'></i>
                        <span>Monitoramento</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link">
                        <i class='bx bx-cog'></i>
                        <span>Config</span>
                    </a>
                </li>
            </ul>
            <div class="sidebar-footer">
                <a href="#" class="sidebar-link">
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
            <h4 class="text text-center mt-4 mb-4">Bem vindo(a) ao portal do Produtor!</h4>
            <p class="text text-center mt-4">Olá, você está na tela inicial do <strong>Portal do Produtor</strong>. Aqui, você pode:</p>
            <ul class="text text-center mt-4">
                <li><strong>Cadastrar Vendas</strong> - Registre suas vendas com facilidade, inserindo dados de cliente, quantidade e preço</li>
                <li><strong>Gerenciar Estoque</strong> - Mantenha o controle do seu estoque de café, evitanto desperdiços e planejando suas compras de forma eficiente</li>
                <li><strong>Acompanhar a Produtividade</strong> - Gere relatórios detalhados e gráficos para monitorar a evolução da sua produção ao longo do tempo</li>
                <li><strong>Analizar o Mercado</strong> - Fique por dentro das tendências de mercado e tome decisões informadas sobre o melhor momento para vender seu café</li>
                <li><strong>Registrar Produções</strong> - Documente suas colheitas com todos os detalhes, desde a data até o custo de produção</li>
                <li><strong>Controlar Custos</strong> - Registre e acompanhe todos os seus gastos com insumos, mão de obra e outros custos</li>
                <li><strong>Monitorar Crescimento</strong> - Faça anotações sobre o estado da lavoura e receba recomendações dos agrônomos do AT&G</li>
            </ul>
            <p class="text text-center mt-4">Explore todas as funcionalidades do portal e aproveite ao máximo as ferramentas disponíveis para otimizar sua produção e aumentar sua eficiência. Estamos aqui para ajudar você a alcançar seus objetivos!</p>
            <p class="text text-center">Qualquer dúvida, pode entrar em contato através deste e-mail: gestordograo@gmail.com</p>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <script src=" <?= base_url('js/navbar-portal.js') ?> "></script>
</body>

</html>