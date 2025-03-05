<?php echo $this->extend('portalProdutor/homePortal') ?>
<?php echo $this->section('content') ?>
    <h3 class="text text-center mt-5 mb-5">Histórico de produções</h3>

<div class="bg-light">
    <div class="container mt-5 mb-5">
        <?php if (!empty($historico)) : ?>
            <table class="table table-bordered table-striped" id="tabela">
                <thead>
                    <tr>
                        <th>Ação</th>
                        <th>Produção</th>
                        <th>Campo Alterado (se aplicável)</th>
                        <th>Usuário</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($historico as $item): ?>
                        <tr>
                            <td>
                                <?php
                                    switch ($item['tipo_acao']) {
                                        case 'INSERT':
                                            echo 'Registro';
                                            break;
                                        case 'UPDATE':
                                            echo 'Alterado';
                                            break;
                                        case 'DELETE':
                                            echo 'Deletado';
                                            break;
                                    }
                                ?>
                            </td>
                            <td><?= $item['nome_producao'] ?></td>
                            <td>
                                <?php if ($item['tipo_acao'] == 'UPDATE'): ?>
                                    <?= $item['nome_coluna'] ?>
                                <?php else: ?>
                                    N/A
                                <?php endif; ?>
                            </td>
                            <td><?= session()->get('user')->nome ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php else: ?>
            <h4 class="text-center mb-4">Nenhuma alteração registrada.</h4>
        <?php endif; ?>
    </div>
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
