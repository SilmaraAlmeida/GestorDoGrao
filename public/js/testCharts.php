<?php
try {
    $conexao = new PDO('mysql:host=localhost;dbname=gestordograotest', 'root', '');
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // primeira consulta
    $firstQuery = $conexao->prepare('SELECT custo_insumo + mao_de_obra + maquina_equipamentos + irrigacao + servicos_terceirizados + receitas AS total_gasto FROM custos_lavoura');
    $firstQuery->execute();

    $resultados = [];
    while ($linha = $firstQuery->fetch(PDO::FETCH_ASSOC)) {
        $resultados[] = $linha['total_gasto'];
    }

    // segunda query
    $secondQuery = $conexao->prepare('SELECT quantidade * preco_unitario AS total_faturado FROM vendas'); 
    $secondQuery->execute();

    $resultadosSecondQuery = [];
    while ($linha = $secondQuery->fetch(PDO::FETCH_ASSOC)) {
        $resultadosSecondQuery[] = $linha['total_faturado'];
    }

    echo json_encode([
        'data' => $resultados,
        'totalFaturado' => $resultadosSecondQuery
    ]);
} catch (PDOException $e) {
    echo 'Error: ' . $e->getMessage();
}
