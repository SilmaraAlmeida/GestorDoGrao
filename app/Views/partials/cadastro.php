<head>
    <link rel="stylesheet" href="<?= base_url('css/login-cadastro.css') ?>">
</head>

<header>
    <div class="contact">
        <div class="contato" id="contato">
    
            <h2 class="text-center">Cadastro do Produtor</h2>
            <?php if (session()->has('error')): ?>
                <span class="text text-danger"><?= session()->getFlashdata('error') ?></span>
            <?php endif ?>
    
            <?php if (session()->has('success')): ?>
                <span class="text text-success"><?= session()->getFlashdata('success') ?></span>
            <?php endif ?>
    
            <form class="needs-validation" action="<?= url_to('cadastrar_store') ?>" method="post">
                <div class="form-group was-validated">
                    <label class="form-label" for="nome">Nome</label>
                    <input class="form-control" type="text" name="nome" id="nome" required>
                </div>
    
                <div class="form-group was-validated">
                    <label class="form-label" for="email">E-mail</label>
                    <input class="form-control" type="email" name="email" id="email" required>
                </div>
    
                <div class="form-group was-validated">
                    <label class="form-label" for="senha">Senha</label>
                    <input class="form-control" type="password" name="senha" id="senha" required>
                </div>
    
                <p>Já tem uma conta? <a href="<?= url_to('form_login') ?>">fazer login</a></p>
    
                <input class="btn btn-success w-100" type="submit" value="Cadastrar">
            </form>
            <a href="<?= url_to('/') ?>"><i class="bi bi-arrow-left"></i></a>
    
        </div>
    </div>
</header>