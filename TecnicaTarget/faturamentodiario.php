<?php

// gerar os dados em json

$dadosJson = file_get_contents('dados.json');
$dados = json_decode($dadosJson, true);

// verificar se os dados foram carregados corretamente

if ($dados === null) {
    echo "Erro ao ler os dados do arquivo JSON.\n";
    exit;
}

//lista pra armazear os valores de faturamento diario
$faturamentos = [];

//processa os dados
foreach ($dados as $registro) {
    $valor = $registro['valor'];
    //Ignora os dias sem faturamento (valor 0.0)
    if ($valor > 0) {
        $faturamentos[] = $valor;
    }
}

// verifica se ha faturamentos para evitar divisao por zero

if (count($faturamentos) > 0) {
    // Calcula o menor e o maior valor de faturamento
    $menorFaturamento = min($faturamentos);
    $maiorFaturamento = max($faturamentos);

    // Calcula a média mensal
    $mediaMensal = array_sum($faturamentos) / count($faturamentos);

    // Calcula o número de dias com faturamento acima da média
    $diasAcimaMedia = 0;
    foreach ($faturamentos as $faturamento) {
        if ($faturamento > $mediaMensal) {
            $diasAcimaMedia++;
        }
    }

    // Exibe os resultados
    echo "Menor valor de faturamento: R$ " . number_format($menorFaturamento, 2, ',', '.') . "\n";
    echo "Maior valor de faturamento: R$ " . number_format($maiorFaturamento, 2, ',', '.') . "\n";
    echo "Número de dias com faturamento acima da média mensal: $diasAcimaMedia\n";
} else {
    echo "Não há dados de faturamento disponíveis.\n";
}

?>