<?php echo $this->extend('portalProdutor/homePortal') ?>
<?php echo $this->section('content') ?>
<div class="text-center mb-3">
    <h3 class="mt-5 mb-2">Vendas Registradas</h3>
    <?php if (session()->has('error')): ?>
        <span class="text text-danger"><?= session()->getFlashdata('error') ?></span>
    <?php endif ?>
    <?php if (session()->has('success')): ?>
        <span class="text text-success"><?= session()->getFlashdata('success') ?></span>
    <?php endif ?>
</div>

<div class="container">
    <table class="table">
        <thead>
            <th>
            <th>Data da Venda</th>
            <th>Cliente</th>
            <th>Produto</th>
            <th>Quantidade</th>
            <th>Preço Unitário</th>
            <th>Total</th>
            </th>
        </thead>
        <tbody>
            <?php $totalFaturado = 0 ?>
            <?php foreach ($vendas as $venda): ?>
                <tr>
                    <td></td>
                    <td><?php echo $venda['data_venda'] ?></td>
                    <td><?php echo $venda['cliente'] ?></td>
                    <td><?php echo $venda['produto'] ?></td>
                    <td><?php echo $venda['quantidade'] ?></td>
                    <td><?php echo $venda['preco_unitario'] ?></td>
                    <?php $totalGanho = $venda['quantidade'] * $venda['preco_unitario'] ?>
                    <td><?php echo $totalGanho ?></td>

                    <?php $totalFaturado = $totalFaturado + $totalGanho ?>

                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?php
session()->set('totalFaturado', $totalFaturado);
?>

<div class="container mt-5 mb-5">
    <div class="mt-5 card border-0 shadow-lg" style="background-color: #eaf4e0; border-radius: 12px;">
        <div class="card-body">
            <h3 class="card-title text-dark" style="color: #2d6a4f;">🌿 Resumo Financeiro do Mês</h3>
            <p class="card-text" style="color: #3a5a40;">Aqui está um resumo dos seus ganhos acumulados no mês. Mantenha o controle de suas receitas para um planejamento mais eficiente.</p>
            <div class="alert mt-3" style="background-color: #40916c; color: #fff; border-radius: 8px; text-align: center;">
                <strong>Lucro Total no Mês:</strong>  
                <p class="fs-4 mb-0" style="color: #d8f3dc;">R$<?php echo number_format($totalFaturado, 2, ',', '.'); ?></p>
            </div>
            <a href="#" class="btn text-white w-100" style="background-color: #2d6a4f; border-radius: 8px;">📊 Ver Relatório Completo</a>
        </div>
    </div>
</div>

<?php echo $this->endSection() ?>