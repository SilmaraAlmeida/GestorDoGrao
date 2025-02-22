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
        <h3 class="mt-5 mb-5">Formulário para Cadastrar Vendas</h3>
        <?php if (session()->has('error')): ?>
            <span class="text text-danger"><?= session()->getFlashdata('error') ?></span>
        <?php endif ?>
        
        <?php if (session()->has('success')): ?>
            <span class="text text-success"><?= session()->getFlashdata('success') ?></span>
        <?php endif ?>
    </div>
    
    <form action="<?= url_to('cadastrar_vendas') ?>" method="post">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group mt-4 mb-4">
                    <label for="data_venda">Data da Venda</label>
                    <input type="text" class="form-control" name="data_venda" id="data_venda" required>
                </div>
                <div class="form-group mt-4 mb-4">
                    <label for="cliente">Cliente</label>
                    <input type="text" class="form-control" name="cliente" id="cliente" required>
                </div>
                <div class="form-group mt-4 mb-4">
                    <label for="produto">Produto</label>
                    <input type="text" class="form-control" name="produto" id="produto" required>
                </div>
            </div>
    
            <div class="col-md-6">
                <div class="form-group mt-4 mb-4">
                    <label for="quantidade">Quantidade</label>
                    <input type="text" class="form-control" name="quantidade" id="quantidade" required>
                </div>
                <div class="form-group mt-4 mb-4">
                    <label for="preco_unitario">Preço Unitário</label>
                    <input type="text" class="form-control" name="preco_unitario" id="preco_unitario" required>
                </div>
            </div>
        </div>
        <div class="col-12 text-center mt-4">
            <button type="submit" class="btn btn-success">Cadastrar</button>
        </div>
    </form>
</div>

<?php echo $this->endSection() ?>