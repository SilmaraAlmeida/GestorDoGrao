<?php echo $this->extend('portalProdutor/homePortal') ?>
<?php echo $this->section('content') ?>
    <h3 class="text text-center mt-5 mb-5">Histórico de produções</h3>

<div class="bg-light">
    <div class="container mt-5 mb-5">
        <?php if (!empty($historico)) : ?>
            <table class="table table-bordered table-striped">
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
            <h2 class="text-center mb-4">Nenhuma alteração registrada.</h2>
        <?php endif; ?>
    </div>
</div>

<?php echo $this->endSection() ?>
