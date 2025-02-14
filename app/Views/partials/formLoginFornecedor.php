<style>
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
</style>
<div class="contact">
    <div class="contato" id="contato">
        <a href="<?= url_to('cadastrar_fornecedor') ?>">Voltar</a>

        <h2 class="text-center">Login do Fornecedor</h2>
        <?php if (session()->has('error')): ?>
            <span class="text text-danger"><?= session()->getFlashdata('error') ?></span>
        <?php endif ?>

        <?php if (session()->has('success')): ?>
            <span class="text text-success"><?= session()->getFlashdata('success') ?></span>
        <?php endif ?>

        <form class="needs-validation" action="<?= url_to('verificar_login_fornecedor') ?>" method="post">
            <div class="form-group was-validated">
                <label class="form-label" for="email_empresa">E-mail</label>
                <input class="form-control" type="email" name="email_empresa" id="email_empresa" required>
            </div>

            <div class="form-group was-validated">
                <label class="form-label" for="senha">Senha</label>
                <input class="form-control" type="password" name="senha" id="senha" required>
            </div>

            <p>Não tem uma conta? <a href="<?= url_to('cadastrar_fornecedor') ?>">Criar conta</a></p>

            <input class="btn btn-success w-100" type="submit" value="Login">
        </form>
    </div>
</div>
