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

    <div class="mt-4 p-4 bg-light rounded card-relatorio">
        <h3>📈 Análise de Mercado</h3>
        <p><strong>Produto Mais Vendido:</strong> Café Arábica</p>
        <p><strong>Quantidade Vendida:</strong> 8.000 kg</p>
        <p><strong>Preço Médio de Venda:</strong> R$ 25,00</p>
        <p><strong>Receita Total:</strong> R$ 200.000</p>
    </div>
</div>
<?php echo $this->endSection() ?>