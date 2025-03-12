<?php 
try {
    $conexao = new PDO('mysql:host=localhost;dbname=gestordograo', 'root', '');
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Primeira query
    $firstQuery = $conexao->prepare('SELECT data_registro, custo_insumo FROM custos_lavoura');
    $firstQuery->execute();

    $data = [];
    while ($row = $firstQuery->fetch(PDO::FETCH_ASSOC)) {
        $data[] = $row;
    }

    // Segunda query
    $secondQuery = $conexao->prepare('SELECT SUM(preco_unitario * quantidade) AS total_faturado FROM vendas');
    $secondQuery->execute();
    $secondQueryResult = $secondQuery->fetch(PDO::FETCH_ASSOC);

    $totalFaturado = $secondQueryResult['total_faturado'];

    echo json_encode([
        'data' => $data,
        'totalFaturado' => $totalFaturado
    ]);
} catch(PDOException $e) {
    echo 'Error: ' . $e->getMessage();
}
?>
