<?php echo $this->extend('portalProdutor/homePortal') ?>
<?php echo $this->section('content') ?>
<main class="container content px-3 py-3">
    <div class="conteiner-fluid">
        <div class="mb-3">
            <h3 class="fw-bold fs-4 mb-3">
                Dashboard do Produtor
            </h3>
            <div class="row">
                <div class="col-12 col-md-6">
                    <div class="card shadow">
                        <div class="card-body py-4">
                            <h6 class="mb-2 fw-bold">
                                Total Faturado
                            </h6>
                            <p class="fw-bold mb-2">
                                R$7.000,00
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
                <div class="col-12 col-md-6">
                    <div class="card shadow">
                        <div class="card-body py-4">
                            <h6 class="mb-2 fw-bold">
                                Total Gasto
                            </h6>
                            <p class="fw-bold mb-2">
                                R$5.000,00
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
            </div>
            <div class="row mt-5">
                <div class="col-12 col-md-7">
                    <h3 class="fw-bold my-3">Users</h3>
                    <table class="table table-striped">
                        <thead>
                            <tr class="highlight">
                                <th scope="col">#</th>
                                <th scope="col">First</th>
                                <th scope="col">Last</th>
                                <th scope="col">Handle</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Larry</td>
                                <td>the Bird</td>
                                <td>@twitter</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-12 col-md-5">
                    <h3 class="fw-bold fs-4 my-3">
                        Visão geral dos relatórios
                    </h3>
                    <canvas id="bar-chart-grouped" width="800" height="450"></canvas>
                </div>
            </div>
        </div>
    </div>
</main>
<?php echo $this->endSection() ?>