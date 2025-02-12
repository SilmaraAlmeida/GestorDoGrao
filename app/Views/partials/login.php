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
        <h2 class="text-center">Fazer Login</h2>

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