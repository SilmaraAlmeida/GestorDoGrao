<?php echo $this->extend('portalProdutor/homePortal') ?>
<?php echo $this->section('content') ?>

<div class="text-center mb-3">
    <h3 class="mt-5 mb-2">Estoque Atual</h3>
</div>

<div class="container">
    <table class="table" id="tabela">
        <thead>
            <tr>
                <th>Nome do Produto</th>
                <th>Tipo de Café</th>
                <th>Categoria</th>
                <th>Quantidade em Estoque</th>
                <th>Preco de Compra</th>
                <th>Preco de Venda</th>
                <th>Fornecedor</th>
                <th>Data de Compra</th>
                <th>Notas Adicionais</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($dados as $dado): ?>
                <tr>
                    <td><?= $dado['nome_produto'] ?></td>
                    <td><?= $dado['tipo_cafe'] ?></td>
                    <td><?= $dado['categoria'] ?></td>
                    <td><?= $dado['quantidade_estoque'] ?></td>
                    <td><?= number_format($dado['preco_compra'], 2, ',', '.') ?></td>
                    <td><?= number_format($dado['preco_venda'], 2, ',', '.') ?></td>
                    <td><?= $dado['fornecedor'] ?></td>
                    <td><?= $dado['data_compra'] ?></td>
                    <td><?= $dado['notas_adicionais'] ?></td>
                </tr>
            <?php endforeach ?>
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