<?php echo $this->extend('portalProdutor/homePortal') ?>
<?php echo $this->section('content') ?>

<style>
    .card-relatorio {
        border-radius: 15px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        transition: box-shadow 0.1s ease-in-out;
    }

    .card-relatorio:hover {
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
    }
</style>
<div class="container mt-5">
    <h2 class="text-center">📊 Relatórios do Café</h2>

</div>
<?php echo $this->endSection() ?>