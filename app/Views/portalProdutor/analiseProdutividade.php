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
    <h4 class="text-center">📊 Relatórios do Café</h4>

    <div class="row mt-5 d-flex justify-content-center">
        <div class="col-md-6">
            <h4>🌱 Análise de Produtividade</h4>
            <p><strong>Safra Atual:</strong> 2024</p>
            <p><strong>Área Plantada:</strong> 55 hectares</p>
            <p><strong>Produção Total:</strong> 16.500 kg</p>
            <p><strong>Produtividade:</strong> 300 kg/ha</p>
            <p><strong>Custo Total:</strong> R$ 130.000</p>
        </div>

        <div class="col-md-6">
            <h4>📈 Análise de Mercado</h4>
            <p><strong>Produto Mais Vendido:</strong> Café Arábica</p>
            <p><strong>Quantidade Vendida:</strong> 8.000 kg</p>
            <p><strong>Preço Médio de Venda:</strong> R$ 25,00</p>
            <p><strong>Receita Total:</strong> R$ 200.000</p>
        </div>
    </div>
</div>

<?php echo $this->endSection() ?>

<!-- scraping.py -->
<!-- No seu arquivo PHP, você pode usar exec() ou shell_exec() para rodar o script Python. -->