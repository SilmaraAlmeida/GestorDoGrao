<?php echo $this->extend('portalProdutor/homePortal') ?>
<?php echo $this->section('content') ?>
<div class="container text-center duvidas">
    <h3 class="mb-5">Relatórios de custo</h3>
    <h5 class="mb-3">Gastos durante o Mês:</h5>

    <div class="container">
        <table class="table">
            <thead>
                <th>
                <th>Custos de Insumo</th>
                <th>Mão de Obra</th>
                <th>Máquina e Equipamentos</th>
                <th>Irrigação</th>
                <th>Serviço Terceirizados</th>
                <th>Metodos de Cultivo</th>
                <th>Receitas</th>
                <th>Total</th>
                </th>
            </thead>
            <tbody>
                <?php foreach ($producoes as $producao): ?>
                    <tr>
                        <td></td>
                        <td><?php echo $producao['nome_completo'] ?></td>
                        <td><?php echo $producao['estado'] ?></td>
                        <td><?php echo $producao['cidade'] ?></td>
                        <td><?php echo $producao['area_plantada'] ?></td>
                        <td><?php echo $producao['variedade_cafe'] ?></td>
                        <td><?php echo $producao['metodos_cultivo'] ?></td>
                        <td><?php echo $producao['producao_safra'] ?></td>
                        <td>
                            <?php echo anchor('portalProdutor/formVisualizarProducao/' . $producao['id'], "<i class='bx bx-low-vision text-success'></i>") ?>
                            <?php echo anchor('portalProdutor/formEditarProducao/' . $producao['id'], "<i class='bx bx-pencil text-success'></i>") ?>
                            <?php echo anchor('portalProdutor/deletarProducao/' . $producao['id'], "<i class='bx bx-trash text-success'></i>") ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
<?php echo $this->endSection() ?>