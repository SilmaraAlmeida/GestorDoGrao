<?php echo $this->extend('portalProdutor/homePortal') ?>
<?php echo $this->section('content') ?>
<h3 class="text text-center mt-5 mb-5">Histórico de produções</h3>

<div class="bg-light">
    <div class="container mt-5 mb-5">
        <?php
            if (!empty($historico)) {
                foreach ($historico as $item) {
                    switch ($item['acao']) {
                        case 'INSERT':
                            ?> 
                                <p>O usuário '<?= session()->get('user')->nome ?>' <span class="text-success">criou</span> a produção '<?= $item['nome_producao_novo'] ?>'</p>
                                <p>Data da ação: <?= $item['alterado_em'] ?></p>
                                <hr>
                                <?php
                        break;
                        case 'UPDATE':
                            ?> 
                                <p>O usuário '<?= session()->get('user')->nome ?>' <span class="text-primary">atualizou</span> a produção '<?= $item['nome_producao_novo'] ?>'</p>
                                <p>Data da ação: <?= $item['alterado_em'] ?></p>
                                <p>Registro Modificado: </p>
                                <hr>
                                <?php
                            break;
                        case 'DELETE':
                                ?> 
                                <p>O usuário '<?= session()->get('user')->nome ?>' <span class="text-danger">deletou</span> a produção '<?= $item['nome_producao_antigo'] ?>'</p>
                                <p>Data da ação: <?= $item['alterado_em'] ?></p>
                                <hr>
                            <?php
                        break;
                    }
                }
            } else {
                echo 'Sem alterações registradas';
            }
        ?>
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