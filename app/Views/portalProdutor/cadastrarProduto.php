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
                    <label for="categoria">Categoria</label>
                    <input type="text" class="form-control" name="categoria" id="categoria" required>
                </div>
                <div class="form-group mt-4 mb-4">
                    <label for="quantidade_estoque">Quantidade em Estoque</label>
                    <input type="text" class="form-control" name="quantidade_estoque" id="quantidade_estoque" required>
                </div>
            </div>
            
            <div class="col-md-6">
                <div class="form-group mt-4 mb-4">
                    <label for="preco_compra">Preço de Compra</label>
                    <input id="money" type="text" class="form-control" name="preco_compra" id="preco_compra" required>
                </div>
                <div class="form-group mt-4 mb-4">
                    <label for="fornecedor">Fornecedor</label>
                    <input type="text" class="form-control" name="fornecedor" id="fornecedor" required>
                </div>
                <div class="form-group mt-4 mb-4">
                    <label for="data_compra">Data de Compra</label>
                    <input type="text" class="form-control" name="data_compra" id="data_compra" required>
                </div>
            </div>
        </div>
        <div class="col-12 text-center mt-4">
            <button type="submit" class="btn btn-success">Cadastrar</button>
        </div>
    </form>
</div>


<!-- JQuery -->
<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.js"></script>

<script>
    $('#money').mask("#.##0,00", {reverse: true});
    $('#money2').mask("#.##0,00", {reverse: true});
    $('#data_compra').mask('00/00/0000');
</script>


<?php echo $this->endSection() ?>