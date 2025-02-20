<?php echo $this->extend('portalProdutor/homePortal') ?>
<?php echo $this->section('content') ?>
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
                        ?>
                        <td><?php echo $total ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
<?php echo $this->endSection() ?>