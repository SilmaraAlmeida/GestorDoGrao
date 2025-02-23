<head>
    <link rel="stylesheet" href="<?= base_url('css/navbar-portal.css') ?>">
</head>
<nav class="navbar navbar-expand-lg navbar-light bg-light bg-transparent">
    <div class="container">
        <a class="navbar-brand" href="#">Gestor do Grão</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="<?= url_to('portal_produtor') ?>">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= url_to('comparar_fornecedores') ?>">Vendas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= url_to('monitorar_progresso') ?>">Relatórios e Análises</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= url_to('monitorar_progresso') ?>">Controle de Produções</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= url_to('monitorar_progresso') ?>">Controle de Custos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= url_to('monitorar_progresso') ?>">Acompanhamento de Progresso</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link login-link" href="<?= url_to('cadastrar_producao') ?>">Cadastrar Produção</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link login-link" href="<?= url_to('login_destroy') ?>">Logout</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
