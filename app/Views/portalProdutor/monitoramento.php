<?php echo $this->extend('portalProdutor/homePortal') ?>
<?php echo $this->section('content') ?>
<link rel="stylesheet" href=" <?= base_url('css/monitoramento.css') ?> ">

<main class="container content px-3 py-3">
    <div class="conteiner-fluid">
        <div class="mb-3">
            <h3 class="fw-bold fs-4 mb-3">
                Dashboard do Produtor
            </h3>
            <div class="row">
                <div class="col-12 col-md-4">
                    <div class="card shadow">
                        <div class="card-body py-4">
                            <h6 class="mb-2 fw-bold">
                                Valor Bruto Faturado
                            </h6>
                            <p class="fw-bold mb-2">
                                <?php
                                $totalFaturado = session()->get('totalFaturado');
                                echo 'R$' . number_format($totalFaturado, 2, ',', '.');
                                ?>
                            </p>
                            <div class="mb-0">
                                <span class="bagde text-success me-2">
                                    +9.0%
                                </span>
                                <span class="fw-bold">
                                    Desde o mês passado
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="card shadow">
                        <div class="card-body py-4">
                            <h6 class="mb-2 fw-bold">
                                Valor Gasto
                            </h6>
                            <p class="fw-bold mb-2">
                                <?php
                                $totalGasto = session()->get('totalGasto');
                                echo 'R$' . number_format($totalGasto, 2, ',', '.');
                                ?>
                            </p>
                            <div class="mb-0">
                                <span class="bagde text-danger me-2">
                                    -4.0%
                                </span>
                                <span class="fw-bold">
                                    Desde o mês passado
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="card shadow">
                        <div class="card-body py-4">
                            <h6 class="mb-2 fw-bold">
                                Valor Final Faturado
                            </h6>
                            <p class="fw-bold mb-2">
                                <?php
                                $valorFinal = $totalFaturado - $totalGasto;

                                echo 'R$' . number_format($valorFinal, 2, ',', '.');
                                ?>
                            </p>
                            <div class="mb-0">
                                <span class="bagde text-success me-2">
                                    4.5%
                                </span>
                                <span class="fw-bold">
                                    Desde o mês passado
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-12 col-md-6">
                    <h3 class="fw-bold fs-4 my-3">
                        Visão geral dos relatórios
                    </h3>
                    <canvas id="bar-chart-grouped-one" width="800" height="450"></canvas>
                </div>
                <div class="col-12 col-md-6">
                    <canvas id="bar-chart-grouped-two" width="800" height="450"></canvas>
                </div>
                <div class="col-12 col-md-12">
                    <h3 class="fw-bold my-3">Produtor - Produções Cadastradas</h3>
                    <table class="table table-striped">
                        <thead>
                            <tr class="highlight">
                                <th scope="col">Produtor</th>
                                <th scope="col">Produções</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($usuarios as $usuario): ?>
                                <tr>
                                    <th scope="row"><?php echo $usuario->nome; ?></th>
                                    <td class="mb-4">
                                        <?php foreach ($producoes as $producao): ?>
                                            <?php if ($producao['id_usuario'] == $usuario->id): ?>
                                                <?php echo $producao['nome_producao']; ?><br>
                                            <?php endif; ?>
                                        <?php endforeach; ?>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>
<script src=" <?= base_url('js/monitoramento.js') ?> "></script>
<?php echo $this->endSection() ?>