<?php echo $this->extend('portalProdutor/homePortal') ?>
<?php echo $this->section('content') ?>
<style>
    .duvidas {
        margin-top: 130px;
        margin-bottom: 60px;
    }
</style>

<div class="text-center">
    <h3 class="mt-5 mb-5">Formulário para editar produções</h3>
    <?php if (session()->has('error')): ?>
        <span class="text text-danger"><?= session()->getFlashdata('error') ?></span>
    <?php endif ?>
    <?php if (session()->has('success')): ?>
        <span class="text text-success"><?= session()->getFlashdata('success') ?></span>
    <?php endif ?>
</div>
        
<div class="container">
    <form action="" method="post">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group mt-4 mb-4">
                    <label for="nome_completo">Nome da Produção</label>
                    <input type="text" class="form-control" name="nome_completo" id="nome_completo" placeholder="Ex.: José Silva" value="<?php echo isset($producoes['nome_completo']) ? $producoes['nome_completo'] : '' ?>" required>
    
                </div>
                <div class="form-group mt-4 mb-4">
                    <label for="estado">Estado</label>
                    <input type="text" class="form-control" name="estado" id="estado" placeholder="Ex.: Minas Gerais" value="<?php echo isset($producoes['estado']) ? $producoes['estado'] : '' ?>" required>
                </div>
                <div class="form-group mt-4 mb-4">
                    <label for="cidade">Cidade</label>
                    <input type="text" class="form-control" name="cidade" id="cidade" placeholder="Ex.: Rosário da Limeira" value="<?php echo isset($producoes['cidade']) ? $producoes['cidade'] : '' ?>" required>
                </div>
                <div class="form-group mt-4 mb-4">
                    <label for="telefone">Telefone</label>
                    <input type="tel" class="form-control" name="telefone" id="telefone" placeholder="Ex.: (XX) XXXXX-XXXX" value="<?php echo isset($producoes['telefone']) ? $producoes['telefone'] : '' ?>" required>
                </div>
            </div>
    
            <div class="col-md-6">
                <div class="form-group mt-4 mb-4">
                    <label for="area_plantada">Área Plantada (em hectares)</label>
                    <input type="number" class="form-control" name="area_plantada" id="area_plantada" placeholder="Ex.: XX.X" value="<?php echo isset($producoes['area_plantada']) ? $producoes['area_plantada'] : '' ?>" required>
                </div>
                <div class="form-group mt-4 mb-4">
                    <label for="variedade_cafe">Variedade do Café</label>
                    <input type="text" class="form-control" name="variedade_cafe" id="variedade_cafe" placeholder="Ex.: Arábica" value="<?php echo isset($producoes['variedade_cafe']) ? $producoes['variedade_cafe'] : '' ?>" required>
                </div>
                <div class="form-group mt-4 mb-4">
                    <label for="metodos_cultivo">Metodos de Cultivo</label>
                    <select name="metodos_cultivo" class="form-control" id="metodos_cultivo">
                        <option value="Cultivo Tradicional">Cultivo Tradicional</option>
                        <option value="Agro Floresta">Agro Floresta</option>
                        <option value="Sistema de Sombras">Sistema de Sombras</option>
                        <option value="Cultivo Orgânico">Cultivo Orgânico</option>
                    </select>
                </div>
                <div class="form-group mt-4 mb-4">
                    <label for="producao_safra">Quantidade média produzido na ultima safra</label>
                    <input type="text" class="form-control" name="producao_safra" id="producao_safra" placeholder="Ex.: XXXX kg" value="<?php echo isset($producoes['producao_safra']) ? $producoes['producao_safra'] : '' ?>" required>
                </div>
            </div>
        </div>
        <input type="hidden" name="id" value="<?php echo isset($producoes['id']) ? $producoes['id'] : '' ?>">
        <div class="col-12 text-center mt-4">
            <button type="submit" class="btn btn-success">Cadastrar</button>
            <a href="<?= url_to('form_producao') ?>" class="btn btn-danger">Cancelar</a>
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

<?php echo $this->endSection() ?>