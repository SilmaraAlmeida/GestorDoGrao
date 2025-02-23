<?php echo $this->extend('portalProdutor/homePortal') ?>
<?php echo $this->section('content') ?>
<style>
    .card-relatorio {
        border-radius: 15px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s;
    }

    .card-relatorio:hover {
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }
</style>
<div class="container mt-5">
    <h2 class="text-center">📊 Relatórios do Café</h2>

    <div class="mt-4 p-4 bg-light rounded card-relatorio">
        <h3>🌱 Análise de Produtividade</h3>
        <p><strong>Safra Atual:</strong> 2024</p>
        <p><strong>Área Plantada:</strong> 55 hectares</p>
        <p><strong>Produção Total:</strong> 16.500 kg</p>
        <p><strong>Produtividade:</strong> 300 kg/ha</p>
        <p><strong>Custo Total:</strong> R$ 130.000</p>
    </div>
</div>

<?php echo $this->endSection() ?>