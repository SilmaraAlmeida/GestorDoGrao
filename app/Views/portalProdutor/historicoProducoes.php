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
                            <?php
                            $campos = [
                                'nome_producao' => 'nome_producao',
                                'estado' => 'estado',
                                'cidade' => 'cidade',
                                'telefone' => 'telefone',
                                'area_plantada' => 'area_plantada',
                                'variedade_cafe' => 'variedade_cafe',
                                'metodo_cultivo' =>  'metodo_cultivo',
                                'quantidade_safra' => 'quantidade_safra',
                            ];

                            $modificacoes =[];

                            foreach ($campos as $campo_antigo => $campo_novo) {
                                $campo_antigo_completo = $campo_antigo . '_antigo';
                                $campo_novo_completo = $campo_novo . '_novo';

                                if ($item[$campo_antigo_completo] != $item[$campo_novo_completo]) {
                                    $modificacoes[$campo_novo] = $item[$campo_novo_completo];
                                }
                            }

                            if (!empty($modificacoes)) {
                            ?>
                                <p>Registro Modificado: </p>
                                <ul>
                                    <?php 
                                        foreach ($modificacoes as $campo => $valor) {
                                        ?>
                                            <li class="text-success"><?= ucfirst($campo) . ': ' . $valor ?></li>
                                        <?php
                                        }
                                    ?>
                                </ul>
                                <hr>
                            <?php
                            }
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