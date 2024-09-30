<?php

//solicitaçao pro usuario informar um numero
$numero = readline("Digite um número:");


// verificação para ver se a entrada seria um numero intiero valido
if (!is_numeric($numero) || intval($numero) != $numero) {
    echo "Por favor, digite um npumero inteiro válido.\n";
    exit;
}

$numero = intval($numero);

// inicialização dos dois primeiros numeors par sequencia de fibonacci
$fib_anterior = 0;
$fib_atual = 1;

// variavel de controle
$encontrado = false;

// verificação se numero é 0 ou 1

if ($numero == 0 || $numero == 1) {
    $encontrado = true;
} else {
    //calcular a sequencia ate encontrar ou superar o numero informado
    while ($fib_atual <= $numero) {
        if ($fib_atual == $numero) {
            $encontrado = true;
            break;
        }
        $fib_proximo = $fib_anterior + $fib_atual;
        $fib_anterior = $fib_atual;
        $fib_atual = $fib_proximo;
    }
}

// exibir o resultado

if ($encontrado) {
    echo "O número " .$numero. " pertence à sequencia de Fibonnaci.\n";
} else {
    echo "O número " .$numero. " não pertence à sequência de Fibonacci.\n";
}

?>