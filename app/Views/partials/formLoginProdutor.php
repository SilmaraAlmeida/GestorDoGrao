<head>
    <link rel="stylesheet" href="<?= base_url('css/login-cadastro.css') ?>">
</head>
<header>
    <div class="contact">
        <div class="contato">
            <h2>Login do Produtor</h2>

            <?php if (session()->has('error')): ?>
                <span class="text text-danger"><?= session()->getFlashdata('error') ?></span>
            <?php endif ?>

            <form action="<?= url_to('verificar_login') ?>" method="post">
                <div class="form-group">
                    <label for="email">E-mail</label>
                    <input class="form-control" type="email" name="email" id="email" required>
                </div>

                <div class="form-group">
                    <label for="senha">Senha</label>
                    <input class="form-control" type="password" name="senha" id="senha" required>
                </div>

                <p>Não tem uma conta? <a href="<?= url_to('cadastrar') ?>">Criar Conta</a></p>

                <input type="submit" value="Login">
            </form>

            <a href="<?= url_to('/') ?>"><i class="bi bi-arrow-left"></i></a>
        </div>
    </div>
</header>
