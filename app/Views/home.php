<style>
    /* NAVBAR */

    .navbar {
        background-color: transparent !important;
        background-color: rgba(0, 0, 0, 0.5) !important;
        backdrop-filter: blur(10px) !important;
    }

    header {
        background-image: url("https://coopercam.com.br/wp-content/uploads/2022/06/cafe-2-1920x1080.jpg");
        height: 100vh;
        min-height: 400px;
        background-size: cover;
    }

    .navbar-light .navbar-nav .nav-link {
        color: #fff;
        font-size: 17px;
    }

    .navbar-light .navbar-nav .nav-link:hover {
        color: #006135;
    }

    .nav-link {
        transition: all 0.3s;
    }

    .navbar-light .navbar-brand {
        color: #fff;
        font-size: 30px;
    }
    .nav-item {
        margin-left: 10px;
    }

    /* Estilos para o link de login */
    .navbar-light .navbar-nav .login-link {
        background: transparent;
        border: 1px solid #006135;
        padding: 2px 5px;
        text-decoration: none;
        border-radius: 10px;
        margin-top: 5px;
    }

    .navbar-light .navbar-nav .login-link:hover {
        background: #006135;
        color: white;
    }

    /* Estilos para o botão de cadastro */
    .navbar-light .navbar-nav .register-btn {
        background: #006135;
        border: none;
        border-radius: 10px;
        margin-top: 5px;
    }

    .navbar-light .navbar-nav .register-btn .register-link {
        color: white;
        padding: 2px 5px;
        text-decoration: none;
    }

    .navbar-light .navbar-nav .register-btn:hover {
        background: #004d28;
    }

    /* CARDS */
    .card .icon {
        color: #006135;
        font-size: 2rem;
    }

    .card .card-text {
        color: #666666;
    }

    .card:hover {
        background-color: #006135;
        color: #ffffff;
    }

    .card:hover .icon,
    .card:hover .card-text {
        color: #ffffff;
    }

    .card {
        transition: all 0.3s;
    }

    /* CONTATO */
    .contact {
        height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .contato {
        width: 360px;
        height: min-content;
        padding: 20px;
        border-radius: 12px;
        border: 2px solid #006135;
    }

    .contato h2 {
        font-size: 36px;
        margin-bottom: 25px;
    }

    .contato form {
        font-size: 18px;
    }

    .contato form .form-group {
        margin-bottom: 12px;
    }

    .contato form input[type="submit"] {
        font-size: 20px;
        margin-bottom: 15px;
    }

    /* FOOTER */
    footer {
        background-color: #343a40;
        color: #f8f9fa;
        padding: 1rem 0;
    }

    footer a {
        color: #f8f9fa;
        text-decoration: none;
        transition: color 0.2s ease-in-out;
    }

    footer a:hover {
        color: #006135;
    }
</style>

<!-- BACKGROUND IMG -->
<header>

</header>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-light bg-light bg-transparent fixed-top">
    <div class="container">
        <a class="navbar-brand" href="#">Gestor do Grão</a>
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
    <h1 class="text-center mt-5 mb-5">Bem Vindo ao Gestor do Grão</h1>

    <!-- PARA TESTE DA NAVBAR -->
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae a doloremque id, labore, illo nemo nam facere rerum cum dolores temporibus voluptas suscipit consequuntur eius! Dignissimos itaque accusantium nobis voluptate?</p>
</div>

<!-- CARDS -->
<div class="container py-5" id="servicos">
    <div class="row">
        <div class="col-lg-4 col-sm-6">
            <div class="card text-center border-0 shadow rounded-0 p-3 my-4 mx-auto">
                <div class="icon">
                    <i class="bi bi-info-circle"></i>
                </div>
                <div class="card-body">
                    <h4 class="card-title fw-bold">O que é o Gestor do Grão?</h4>
                    <p class="card-text">Sistema web voltado para produtores de café, trazendo mais eficiência para o gerenciamento da produção.</p>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-sm-6">
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

        <div class="col-lg-4 col-sm-6">
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

        <div class="col-lg-4 col-sm-6">
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

        <div class="col-lg-4 col-sm-6">
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

        <div class="col-lg-4 col-sm-6">
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

    <!-- CONTATO -->
    <div class="contact">
        <div class="contato" id="contato">
            <h2 class="text-center">Entre em contato!</h2>

            <form class="needs-validation" action="<?= url_to('enviar_email') ?>" method="post">
                <div class="form-group was-validated">
                    <label class="form-label" for="nome">Nome</label>
                    <input class="form-control" type="text" name="nome" id="nome" required>
                    <div class="invalid-feedback">Por favor, insira seu nome</div>
                </div>

                <div class="form-group was-validated">
                    <label class="form-label" for="email">E-mail</label>
                    <input class="form-control" type="email" name="email" id="email" required>
                    <div class="invalid-feedback">Por favor, insira seu email</div>
                </div>

                <div class="form-group was-validated">
                    <label class="form-label" for="assunto">Assunto</label>
                    <input class="form-control" type="text" name="assunto" id="assunto" required></input>
                    <div class="invalid-feedback">Por favor, insira o assunto</div>
                </div>

                <div class="form-group was-validated">
                    <label class="form-label" for="mensagem">Mensagem</label>
                    <textarea class="form-control" name="mensagem" id="mensagem" required></textarea>
                    <div class="invalid-feedback">Por favor, insira sua mensagem</div>
                </div>

                <input class="btn btn-success w-100" type="submit" value="Enviar mensagem">
            </form>
        </div>
    </div>
</div>
</div>