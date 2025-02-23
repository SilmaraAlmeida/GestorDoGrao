<?php echo $this->extend('portalProdutor/homePortal') ?>
<?php echo $this->section('content') ?>

<div class="container">
</div>
<div class="container text-center duvidas">
    <h3 class="mb-5">Relatórios de custo</h3>
    <h5 class="mb-3">Gastos durante o Mês:</h5>

    <div class="container">
        <table class="table">
            <thead>
                <th>
                <th>Data de Registro</th>
                <th>Custos de Insumo</th>
                <th>Mão de Obra</th>
                <th>Máquina e Equipamentos</th>
                <th>Irrigação</th>
                <th>Serviço Terceirizados</th>
                <th>Receitas</th>
                <th>Total</th>
                </th>
            </thead>
            <tbody>
                <?php $totalTabela = 0 ?>
                <?php foreach ($custos as $custo): ?>
                    <tr>
                        <td></td>
                        <td><?php echo $custo['data_registro'] ?></td>
                        <td><?php echo $custo['custo_insumo'] ?></td>
                        <td><?php echo $custo['mao_de_obra'] ?></td>
                        <td><?php echo $custo['maquina_equipamentos'] ?></td>
                        <td><?php echo $custo['irrigacao'] ?></td>
                        <td><?php echo $custo['servicos_terceirizados'] ?></td>
                        <td><?php echo $custo['receitas'] ?></td>
                        <?php
                        $total = $custo['custo_insumo'] + $custo['mao_de_obra'] + $custo['maquina_equipamentos']
                            + $custo['irrigacao'] + $custo['servicos_terceirizados'] + $custo['receitas'];
                        $totalTabela = $totalTabela + $total;
                        ?>
                        <td><?php echo $total ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<?php
session()->set('totalGasto', $totalTabela);
?>

<div class="container mt-5 mb-5">
    <div class="mt-5 card border-0 shadow-lg" style="background-color: #eaf4e0; border-radius: 12px;">
        <div class="card-body">
            <h3 class="card-title text-dark" style="color: #2d6a4f;">💰 Gastos Totais no Mês</h3>
            <p class="card-text" style="color: #3a5a40;">Aqui está um resumo dos seus gastos acumulados no mês. Mantenha o controle para um planejamento financeiro mais eficiente.</p>
            <div class="alert mt-3" style="background-color: #40916c; color: #fff; border-radius: 8px; text-align: center;">
                <strong>Gastos Totais no Mês:</strong>
                <p class="fs-4 mb-0" style="color: #d8f3dc;">R$<?php echo number_format($totalTabela, 2, ',', '.'); ?></p>
            </div>
            <a href="#" class="btn text-white w-100" style="background-color: #2d6a4f; border-radius: 8px;">📉 Ver Detalhes dos Gastos</a>
        </div>
    </div>
</div>
<?php echo $this->endSection() ?>