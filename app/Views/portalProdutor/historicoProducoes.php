<?php echo $this->extend('portalProdutor/homePortal') ?>
<?php echo $this->section('content') ?>
    <h3 class="text text-center mt-5 mb-5">Histórico de produções</h3>

<div class="bg-light">
    <div class="container mt-5">
        <?php if (!empty($historico)) : ?>
            <?php foreach ($historico as $item) : ?>
                <h4 class="text-center mb-4">
                    <?php if ($item['tipo_acao'] == 'INSERT') : ?>
                        <p>O usuário '<?= session()->get('user')->nome ?>' registrou a produção '<?= $item['nome_producao'] ?>'</p>
                    <?php else : ?>
                        <p>Nenhuma alteração registrada.</p>
                    <?php endif; ?>
                </h4>
            <?php endforeach; ?>
        <?php else : ?>
            <h2 class="text-center mb-4">Nenhuma alteração registrada.</h2>
        <?php endif; ?>
    </div>
</div>

<?php echo $this->endSection() ?>
