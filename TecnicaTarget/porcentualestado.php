<?php

// SP - R$67.836,43
// RJ - R$36.678,66
//MG - R$29.229,88
//ES - R$27.165,48
//Outros - R$19.849,53

//dados de faturamento por estado, definidos em uma array pra facilitar no final do codigo
$faturamento = [
    'SP' => 67836.43,
    'RJ' => 36678.66,
    'MG' => 29229.88,
    'ES' => 27165.48,
    'outros' => 19849.53
];

//calcular o fatuamento total

$faturamentoTotal = array_sum($faturamento);

//verificação para ver se o faturamento total é maior que zero para evitar divisão por zero
if ($faturamentoTotal >0) {
    //calcula e exibite o porcentual de cada estado
    foreach ($faturamento as $estado => $valor) {
        $porcentual = ($valor / $faturamentoTotal) * 100;
        echo "$estado - " . number_format($porcentual,2, ',', '.') . "%\n";
    }
} else {
    echo"O faturamento total é zero. Não é possivel calcular os porcentuais. \n";
}

?>