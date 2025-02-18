<!-- BACKGROUND IMG -->
<header>
    <div class="header-overlay">
        <h2>O Futuro da Gestão do Café na Palma da Sua Mão</h2>
        <p>Redistre sua colheita, compare preços e maximize seus lucros com facilidade!</p>
        <button class="saiba-mais"><a href="#sobre">Saiba Mais</a></button>
    </div>
</header>


<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-light bg-light bg-transparent fixed-top">
    <div class="container">
        <img src="<?= base_url('uploads/home-cafe-logo.png') ?>" class="img-fluid rounded mt-2 mb-2" style="width: 200px;" alt="Imagem de café">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="#">HOME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#sobre">SOBRE</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#servicos">SERVIÇOS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contato">CONTATO</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link login-link" href="<?= url_to('form_login') ?>">LOGIN</a>
                </li>
                <li class="nav-item">
                    <button type="button" class="register-btn"><a class="nav-link register-link" href="<?= url_to('cadastrar') ?>">CADASTRAR</a></button>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- SOBRE -->
<div class="container mt-5 mb-5" id="sobre">
    <div class="row align-items-center">
        <h1 class="text-center mt-5 mb-4">Bem-vindo ao Gestor do Grão</h1>
        <!-- Texto na esquerda -->
        <div class="col-md-6 text-center">
            <p>
                O <strong>Gestor do Grão</strong> nasceu com a intenção de ajudar meu pai, um produtor de café que, por muito tempo, não costumava registrar informações sobre sua produção.
                Isso mudou quando ele passou a fazer parte do <strong>AT&G (Assistência Técnica e Gerencial)</strong>, um programa onde, uma vez por mês, um agrônomo visita a propriedade para avaliar a lavoura e sugerir melhorias.
            </p>
            <p>
                Com essa nova rotina, ele começou a fazer anotações sobre os custos, insumos e produtividade. No entanto, anotar tudo em papel tem suas desvantagens:
                pode se rasgar, molhar, ser perdido ou até ficar ilegível com o tempo. Além disso, buscar informações antigas pode ser demorado e confuso.
            </p>
            <p>
                Pensando nisso, criei o <strong>Gestor do Grão</strong> para ajudar produtores de café de pequeno e médio porte a organizarem suas produções de forma digital,
                garantindo um controle eficiente dos gastos, da produção e das recomendações técnicas. Aqui, todas as informações ficam armazenadas de forma segura, acessível e organizada.
            </p>
        </div>

        <!-- Imagem na direita -->
        <div class="col-md-6 text-center">
            <img src="<?= base_url('uploads/foto-pai-davi.png') ?>" class="img-fluid rounded" alt="Imagem de café">
        </div>
    </div>
</div>


<!-- CARDS -->
<div class="container py-5" id="servicos">
    <h1 class="text-center mt-5 mb-5">Oque a plataforma oferece?</h1>

    <div class="row d-flex align-items-stretch">
        <div class="col-lg-4 col-sm-6 mb-4">
            <div class="card text-center border-0 shadow rounded-0 p-3 my-4 mx-auto">
                <div class="icon">
                    <i class="bi bi-pencil-square"></i>
                </div>
                <div class="card-body">
                    <h4 class="card-title fw-bold">Cadastro de Produções</h4>
                    <p class="card-text">Permite que os produtores registrem e acompanhem cada etapa da sua produção.</p>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-sm-6 mb-4">
            <div class="card text-center border-0 shadow rounded-0 p-3 my-4 mx-auto">
                <div class="icon">
                    <i class="bi bi-info-circle"></i>
                </div>
                <div class="card-body">
                    <h4 class="card-title fw-bold">Funcionalidades gratuitas</h4>
                    <p class="card-text">Permite que os produtores acompanhar cada etapa da sua produção sem custos.</p>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-sm-6 mb-4">
            <div class="card text-center border-0 shadow rounded-0 p-3 my-4 mx-auto">
                <div class="icon">
                    <i class="bi bi-bar-chart-line"></i>
                </div>
                <div class="card-body">
                    <h4 class="card-title fw-bold">Comparação de Fornecedores</h4>
                    <p class="card-text">Facilita a escolha dos melhores fornecedores com base em preços e qualidade.</p>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-sm-6 mb-4">
            <div class="card text-center border-0 shadow rounded-0 p-3 my-4 mx-auto">
                <div class="icon">
                    <i class="bi bi-graph-up"></i>
                </div>
                <div class="card-body">
                    <h4 class="card-title fw-bold">Monitoramento do Progresso</h4>
                    <p class="card-text">Ferramentas para acompanhar cada etapa da produção e garantir melhor controle.</p>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-sm-6 mb-4">
            <div class="card text-center border-0 shadow rounded-0 p-3 my-4 mx-auto">
                <div class="icon">
                    <i class="bi bi-clipboard-check"></i>
                </div>
                <div class="card-body">
                    <h4 class="card-title fw-bold">Organização e Eficiência</h4>
                    <p class="card-text"> Centraliza as informações, ajudando na tomada de decisões estratégicas.</p>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-sm-6 mb-4">
            <div class="card text-center border-0 shadow rounded-0 p-3 my-4 mx-auto">
                <div class="icon">
                    <i class="bi bi-award"></i>
                </div>
                <div class="card-body">
                    <h4 class="card-title fw-bold">Benefícios para o Produtor</h4>
                    <p class="card-text">Redução de desperdícios, aumento da qualidade e mais previsibilidade no mercado.</p>
                </div>
            </div>
        </div>
    </div>
</div>

    <!-- CONTATO -->
    <div class="contact">
        <div class="contato" id="contato">
            <h2 class="text-center">Entre em contato!</h2>

            <form class="needs-validation" action="<?= url_to('enviar_email') ?>" method="post">
                <div class="form-group">
                    <label class="form-label" for="nome">Nome</label>
                    <input class="form-control" type="text" name="nome" id="nome" required>
                </div>

                <div class="form-group">
                    <label class="form-label" for="email">E-mail</label>
                    <input class="form-control" type="email" name="email" id="email" required>
                </div>

                <div class="form-group">
                    <label class="form-label" for="assunto">Assunto</label>
                    <input class="form-control" type="text" name="assunto" id="assunto" required></input>
                </div>

                <div class="form-group">
                    <label class="form-label" for="mensagem">Mensagem</label>
                    <textarea class="form-control" name="mensagem" id="mensagem" required></textarea>
                </div>

                <input class="btn btn-success w-100" type="submit" value="Enviar mensagem">
            </form>
        </div>
    </div>
</div>
</div>