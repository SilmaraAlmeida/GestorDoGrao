<?php echo $this->extend('portalProdutor/homePortal') ?>
<?php echo $this->section('content') ?>
<style>
    .duvidas {
        margin-top: 130px;
        margin-bottom: 60px;
    }
</style>

<div class="text-center">
    <h3 class="mt-5 mb-5">Formulário para registrar Custos</h3>
    <?php if (session()->has('error')): ?>
        <span class="text text-danger"><?= session()->getFlashdata('error') ?></span>
    <?php endif ?>
    
    <?php if (session()->has('success')): ?>
        <span class="text text-success"><?= session()->getFlashdata('success') ?></span>
    <?php endif ?>
</div>

<form action="<?= url_to('cadastrar_gastos') ?>" method="post">
    <div class="row">
        <div class="col-md-6">
            <div class="form-group mt-4 mb-4">
                <label for="custo_insumo">Custos de Insumos</label>
                <input type="text" class="form-control" name="custos_insumos" id="custos_insumos" required>
            </div>
            <div class="form-group mt-4 mb-4">
                <label for="mao_de_obra">Mão de Obra</label>
                <input type="text" class="form-control" name="mao_de_obra" id="mao_de_obra" required>
            </div>
            <div class="form-group mt-4 mb-4">
                <label for="maquina_equipamentos">Máquinas e Equipamentos</label>
                <input type="text" class="form-control" name="maquina_equipamentos" id="maquina_equipamentos" required>
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group mt-4 mb-4">
                <label for="irrigacao">Irrigação</label>
                <input type="text" class="form-control" name="irrigacao" id="irrigacao" required>
            </div>
            <div class="form-group mt-4 mb-4">
                <label for="servicos_terceirizados">Serviços Terceirizados</label>
                <input type="text" class="form-control" name="servicos_terceirizados" id="servicos_terceirizados" required>
            </div>
            <div class="form-group mt-4 mb-4">
                <label for="receitas">Receitas (Preço de venda)</label>
                <input type="text" class="form-control" name="receitas" id="receitas" required>
            </div>
        </div>
    </div>
    <div class="col-12 text-center mt-4">
        <button type="submit" class="btn btn-success">Cadastrar</button>
    </div>
</form>

<?php echo $this->endSection() ?>