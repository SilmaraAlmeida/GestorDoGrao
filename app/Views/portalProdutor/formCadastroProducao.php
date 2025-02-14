<style>
    .contact {
        height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .contato {
        width: 80%;
        max-width: 800px;
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
        display: flex;
        flex-direction: column;
    }

    .row {
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
    }

    .column {
        flex: 1;
        min-width: 200px;
    }

    .contato form input[type="submit"] {
        font-size: 20px;
        margin-bottom: 15px;
        width: 100%;
    }

    span {
        color: red;
    }

    i {
        color: #000;
        font-size: 25px;
    }
</style>
<div class="contact">
    <div class="contato" id="contato">
        <a href="<?= url_to('portal_produtor') ?>"><i class="bi bi-arrow-left"></i></a>
        <h2 class="text-center">Cadastro de Produção</h2>
        <?php if (session()->has('error')): ?>
            <span class="text text-danger"><?= session()->getFlashdata('error') ?></span>
        <?php endif ?>

        <?php if (session()->has('success')): ?>
            <span class="text text-success"><?= session()->getFlashdata('success') ?></span>
        <?php endif ?>

        <form class="needs-validation" action="<?= url_to('cadastrar_producao_store') ?>" method="post">
            <div class="row">
                <div class="column">
                    <div class="form-group">
                        <label class="form-label" for="nome_completo">Nome Completo do Produtor <span>*</span></label>
                        <input class="form-control" type="text" name="nome_completo" id="nome_completo" required>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="estado">Estado <span>*</span></label>
                        <input class="form-control" type="text" name="estado" id="estado" required>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="cidade">Cidade <span>*</span></label>
                        <input class="form-control" type="text" name="cidade" id="cidade" required>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="telefone">Telefone <span>*</span></label>
                        <input class="form-control" type="text" name="telefone" id="telefone" required>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="area_plantada">Quantidade de terra dedicada ao cultivo do café (em hectares) <span>*</span></label>
                        <input class="form-control" type="text" name="area_plantada" id="area_plantada" required>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="numero_registro">Número de registro</label>
                        <input class="form-control" type="text" name="numero_registro" id="numero_registro">
                    </div>
                </div>
                <div class="column">
                    <div class="form-group">
                        <label class="form-label" for="variedade_cafe">Variedade do café <span>*</span></label>
                        <select class="form-control" name="mercado_destino" id="mercado_destino" required>
                            <option value="">Selecionar</option>
                            <option value="interno">Arábica</option>
                            <option value="conilon">Conilon</option>
                            <option value="liberica">Libérica</option>
                            <option value="excelsa">Excelsa</option>
                            <option value="catucai">Catucaí</option>
                            <option value="mundo novo">Mundo Novo</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="metodos_cultivo">Métodos utilizados na plantação <span>*</span></label>
                        <input class="form-control" type="text" name="metodos_cultivo" id="metodos_cultivo" required>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="producao_safra">Quantidade de café produzido por safra <span>*</span></label>
                        <input class="form-control" type="text" name="producao_safra" id="producao_safra" required>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="produtividade">Produtividade</label>
                        <input class="form-control" type="text" name="produtividade" id="produtividade">
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="mercado_destino">O café é destinado ao mercado interno ou externo? <span>*</span></label>
                        <select class="form-control" name="mercado_destino" id="mercado_destino" required>
                            <option value="">Selecionar</option>
                            <option value="interno">Interno</option>
                            <option value="externo">Externo</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="certificacoes">Certificações</label>
                        <input class="form-control" type="text" name="certificacoes" id="certificacoes">
                    </div>
                </div>
            </div>

            <input class="btn btn-success w-100" type="submit" value="Cadastrar">
        </form>
    </div>
</div>