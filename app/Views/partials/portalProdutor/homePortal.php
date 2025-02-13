<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php if (session()->has('user')): ?>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light bg-transparent">
        <div class="container">
            <a class="navbar-brand" href="#">Gestor do Grão</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link login-link" href="<?= url_to('cadastrar_producao') ?>">Cadastrar Produção</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Comparar fornecedores</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#sobre">Monitorar Progresso</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link login-link" href="<?= url_to('login_destroy') ?>">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="text text-center container mt-5 mb-5">
        <h3>Olá, <?php echo session()->get('user')->nome ?></h3>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Maxime asperiores dolores, optio ipsa explicabo amet cum aliquam laboriosam. In earum nisi ratione inventore! A perferendis hic reprehenderit cupiditate veritatis ad.</p>
    </div>

<?php endif ?>

    <h2>Portal</h2>
</body>

</html>