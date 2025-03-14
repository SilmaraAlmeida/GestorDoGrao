<?php echo $this->extend('portalProdutor/homePortal') ?>
<?php echo $this->section('content') ?>
<style>
    .duvidas {
        margin-top: 130px;
        margin-bottom: 60px;
    }
</style>

<div class="container">
    <div class="text-center">
        <h3 class="mt-5 mb-5">Formulário para registrar produções</h3>
        <?php if (session()->has('error')): ?>
            <span class="text text-danger"><?= session()->getFlashdata('error') ?></span>
        <?php endif ?>
        <?php if (session()->has('success')): ?>
            <span class="text text-success"><?= session()->getFlashdata('success') ?></span>
        <?php endif ?>
    </div>
    
    <form action="<?= url_to('cadastrar_producao') ?>" method="post">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group mt-4 mb-4">
                    <label for="nome_producao">Nome da Produção</label>
                    <input type="text" class="form-control" name="nome_producao" id="nome_producao" placeholder="Ex.: Produção do(a) <?= session()->get('user')->nome ?>" value="<?php echo $producoes['nome_producao'] ?? '' ?>" required>
                </div>
                <div class="form-group mt-4 mb-4">
                    <label for="estado">Estado</label>
                    <input type="text" class="form-control" name="estado" id="estado" placeholder="Ex.: Minas Gerais" required>
                </div>
                <div class="form-group mt-4 mb-4">
                    <label for="cidade">Cidade</label>
                    <input type="text" class="form-control" name="cidade" id="cidade" placeholder="Ex.: Rosário da Limeira" required>
                </div>
                <div class="form-group mt-4 mb-4">
                    <label for="telefone">Telefone</label>
                    <input id="phone" type="tel" class="form-control" name="telefone" id="telefone" placeholder="Ex.: (XX) XXXX-XXXX" required>
                </div>
            </div>
    
            <div class="col-md-6">
                <div class="form-group mt-4 mb-4">
                    <label for="area_plantada">Área Plantada (em hectares)</label>
                    <input type="number" class="form-control" name="area_plantada" id="area_plantada" placeholder="Ex.: XX.X" required>
                </div>
                <div class="form-group mt-4 mb-4">
                    <label for="variedade_cafe">Variedade do Café</label>
                    <select class="form-control" name="variedade_cafe" id="variedade_cafe">
                        <?php foreach ($tipos_cafe as $tipo_Cafe): ?>
                            <option value="<?= $tipo_Cafe['nome_variedade'] ?>"><?= $tipo_Cafe['nome_variedade'] ?></option>
                        <?php endforeach ?>
                    </select>
                </div>
                <div class="form-group mt-4 mb-4">
                    <label for="metodos_cultivo">Metodos de Cultivo</label>
                    <select name="metodos_cultivo" class="form-control" id="metodos_cultivo">
                        <?php foreach ($metodos_cultivo as $metodo_cultivo): ?>
                            <option value="<?= $metodo_cultivo['nome_metodo'] ?>"><?= $metodo_cultivo['nome_metodo'] ?></option>
                        <?php endforeach ?>
                    </select>
                </div>
                <div class="form-group mt-4 mb-4">
                    <label for="producao_safra">Quantidade média produzido na ultima safra</label>
                    <input type="text" class="form-control" name="producao_safra" id="producao_safra" placeholder="Ex.: XXXX kg" required>
                </div>
            </div>
        </div>
        <div class="col-12 text-center mt-4">
            <button type="submit" class="btn btn-success">Cadastrar</button>
        </div>
    </form>
    
    <div class="container text-center duvidas">
        <h4 class="mb-5">Em Caso de Dúvidas:</h4>
    
        <p><strong>Cultivo Tradicional</strong> -> Plantio em linhas, manejo convencional do solo, irrigação e controle de pragas.</p>
        <p><strong>Agro Floresta</strong> -> Integra o cultivo de café com outras plantas, como árvores frutíferas e madeireiras.</p>
        <p><strong>Sistema de Sombras</strong> -> Utiliza árvores para fornecer sombra aos cafeeiros, moderando a temperatura e protegendo do sol direto.</p>
        <p><strong>Cultivo Orgânico</strong> -> Evita pesticidas e fertilizantes químicos, utilizando métodos naturais para controle de pragas e fertilização do solo.</p>
    </div>
</div>

<!-- JQuery -->
<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.js"></script>

<script>
    $('#phone').mask('(00) 0000-0000');
</script>

<?php echo $this->endSection() ?>