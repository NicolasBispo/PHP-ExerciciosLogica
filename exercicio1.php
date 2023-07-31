<?php

/*
Criar um programa que recebe um numero inteiro e exibe se é par ou impar
*/

function verificarPar($numero){
    $resultado = "";
    if(($numero % 2) == 1){
        return ($resultado = 'impar');
    }
    else{
        return ($resultado = 'par');
    }
}

$contador = 0;
while($contador <=10){
    $numeroGerado = random_int(1,100);
    $resultadoAnalise = verificarPar($numeroGerado);
    echo("Numero: " . $numeroGerado .  " é " . $resultadoAnalise . '<br>');
    $contador = $contador + 1;
}



?>