<?php echo $this->extend('portalProdutor/homePortal') ?>
<?php echo $this->section('content') ?>
<style>
    .duvidas {
        margin-top: 130px;
        margin-bottom: 60px;
    }
</style>

<div class="text-center">
    <h3 class="mt-5 mb-5">Formulário para Cadastrar Produtos em Estoque</h3>
    <?php if (session()->has('error')): ?>
        <span class="text text-danger"><?= session()->getFlashdata('error') ?></span>
    <?php endif ?>
    
    <?php if (session()->has('success')): ?>
        <span class="text text-success"><?= session()->getFlashdata('success') ?></span>
    <?php endif ?>
</div>

<form action="<?= url_to('cadastro_produto') ?>" method="post">
    <div class="row">
        <div class="col-md-6">
            <div class="form-group mt-4 mb-4">
                <label for="nome_produto">Nome do Produto</label>
                <input type="text" class="form-control" name="nome_produto" id="nome_produto" required>
            </div>
            <div class="form-group mt-4 mb-4">
                <label for="tipo_cafe">Tipo de Café</label>
                <input type="text" class="form-control" name="tipo_cafe" id="tipo_cafe" required>
            </div>
            <div class="form-group mt-4 mb-4">
                <label for="categoria">Categoria</label>
                <input type="text" class="form-control" name="categoria" id="categoria" required>
            </div>
            <div class="form-group mt-4 mb-4">
                <label for="quantidade_estoque">Quantidade em Estoque</label>
                <input type="text" class="form-control" name="quantidade_estoque" id="quantidade_estoque" required>
            </div>
            <div class="form-group mt-4 mb-4">
                <label for="preco_compra">Preço de Compra</label>
                <input type="text" class="form-control" name="preco_compra" id="preco_compra" required>
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group mt-4 mb-4">
                <label for="preco_venda">Preço de Venda</label>
                <input type="text" class="form-control" name="preco_venda" id="preco_venda" required>
            </div>
            <div class="form-group mt-4 mb-4">
                <label for="fornecedor">Fornecedor</label>
                <input type="text" class="form-control" name="fornecedor" id="fornecedor" required>
            </div>
            <div class="form-group mt-4 mb-4">
                <label for="data_compra">Data de Compra</label>
                <input type="text" class="form-control" name="data_compra" id="data_compra" required>
            </div>
            <div class="form-group mt-4 mb-4">
                <label for="notas_adicionais">Notas Adicionais</label>
                <input type="text" class="form-control" name="notas_adicionais" id="notas_adicionais" required>
            </div>
        </div>
    </div>
    <div class="col-12 text-center mt-4">
        <button type="submit" class="btn btn-success">Cadastrar</button>
    </div>
</form>

<?php echo $this->endSection() ?>