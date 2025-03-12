<?php 
try {
    $conexao = new PDO('mysql:host=localhost;dbname=gestordograo', 'root', '');
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $firstQuery = $conexao->prepare('SELECT custo_insumo + mao_de_obra + maquina_equipamentos + irrigacao + servicos_terceirizados + receitas AS total_gasto FROM custos_lavoura');
    $firstQuery->execute();
    
    var_dump($secondQuery);

    $resultados = [];
    while ($linha = $firstQuery->fetch(PDO::FETCH_ASSOC)) {
        $resultados[] = $linha['total_gasto']; 
    }

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
