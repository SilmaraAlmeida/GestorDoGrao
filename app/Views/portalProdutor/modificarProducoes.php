<?php echo $this->extend('portalProdutor/homePortal') ?>
<?php echo $this->section('content') ?>
<div class="text-center mb-3">
    <h3 class="mt-5 mb-2">Modifiar Produção</h3>
    <?php if (session()->has('error')): ?>
        <span class="text text-danger"><?= session()->getFlashdata('error') ?></span>
    <?php endif ?>
    <?php if (session()->has('success')): ?>
        <span class="text text-success"><?= session()->getFlashdata('success') ?></span>
    <?php endif ?>
</div>

<div class="container mb-5">
    <table class="table" id="tabela">
        <thead>
            <th>
            <th>Nome da Produção</th>
            <th>Estado</th>
            <th>Cidade</th>
            <th>Area Plantada</th>
            <th>Variedade</th>
            <th>Metodos de Cultivo</th>
            <th>Produção ultima safra</th>
            <th>Ações</th>
            </th>
        </thead>
        <tbody>
            <?php foreach ($producoes as $producao): ?>
                <tr>
                    <td></td>
                    <td><?php echo $producao['nome_producao'] ?></td>
                    <td><?php echo $producao['estado'] ?></td>
                    <td><?php echo $producao['cidade'] ?></td>
                    <td><?php echo $producao['area_plantada'] ?></td>
                    <td><?php echo $producao['id_variedade_cafe'] ?></td>
                    <td><?php echo $producao['id_metodos_cultivo'] ?></td>
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

<!-- JQUERY -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<!-- DATA TABLE -->
<script src="https://cdn.datatables.net/2.2.2/js/dataTables.js"></script>

<script>
    $(document).ready(function() {
        $('#tabela').DataTable();
    });
</script>

<?php echo $this->endSection() ?>