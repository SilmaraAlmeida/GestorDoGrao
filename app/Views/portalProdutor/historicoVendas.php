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
            <?php $totalTabela = 0 ?>
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

                    <?php $totalTabela = $totalTabela + $totalGanho ?>

                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<div class="mt-5">
    <p>Lucro no Mês: <strong>R$<?php echo $totalTabela ?></strong></p>
</div>
<?php echo $this->endSection() ?>