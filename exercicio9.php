<?php

/*
Funcao recursiva que calcula o valor de uma posicao de uma sequencia fibonacci
0,1,1,2,3,5,8,13,21
*/

function fibonacci($n) {
    // Caso base: Se o n for 0 ou 1, retornamos o próprio n.
    if ($n == 0 || $n == 1) {
        return $n;
    } else {
       //Chamando a fynção
       echo("Valor de N atual: $n <br>");
        return fibonacci($n - 1) + fibonacci($n - 2);
    }
}

// Exemplo de uso:
$n =8;
echo "O $n-ésimo número da sequência de Fibonacci é: " . fibonacci($n); // Saída: 8


?>