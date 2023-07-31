<?php
$total = 1;
function executarExpressao(array $expressao) {
    $resultado = 0;

    //Define como positivo para inicialmente verificar se o início da equação é negativo
    $operador = '+';

    for ($i = 0; $i < count($expressao); $i++) {
        $elemento = $expressao[$i];

        //Comparando se o elemento atual é um numero, se nao for ele pula para a proxima condição
        if (is_numeric($elemento)) {
            switch ($operador) {
                case '+':
                    $resultado += $elemento;
                    break;
                case '-':
                    $resultado -= $elemento;
                    break;
                case '*':
                    $resultado *= $elemento;
                    break;
                case '/':
                    $resultado /= $elemento;
                    break;
                default:
                    
            }
        } 
        //Compara se o elemento atual é um simbolo matemático se for ele define o operador com
        //o valor de elemento
        elseif ($elemento === '+' || $elemento === '-' || $elemento === '*' || $elemento === '/') {
            $operador = $elemento;
        }    
    }
    return $resultado;
}




function avaliarExpressao(string $expressaoMatematica)
{
    $elementosSeparados = array();
    $operadoresMatematicos = array('+', '-', '*', '/');
    $numero = '';

    // Aqui comparo cada elemento da string da formula
    for ($contador1 = 0; $contador1 < strlen($expressaoMatematica); $contador1++) {
        $caractereAtual = $expressaoMatematica[$contador1];
        //20*3+2
        // Verificando se o caractere atual é um operador matematico
        if (in_array($caractereAtual, $operadoresMatematicos) || $caractereAtual === ' ') {
            // Se for, faço uma validação se a variável número está vazia
            // Se não estiver, adiciono o número ao vetor isolado
            if ($numero !== '') {
                $elementosSeparados[] = $numero;
                // Reseto o valor de número
                $numero = '';
            }

            // Se o caractere atual analisado não estiver vazio e não for espaço em branco,
            // o adiciono ao meu vetor
            if ($caractereAtual !== ' ') {
                $elementosSeparados[] = $caractereAtual;
            }
        } else {
            // Se o caractere atual analisado não for um operador matemático ou espaço em branco,
            // adiciono à variável número
            $numero .= $caractereAtual;
        }
    }

    // Adicionando o último caractere restante que ficou na variável número ao vetor
    if ($numero !== '') {
        $elementosSeparados[] = $numero;
    }

    $resultado = executarExpressao($elementosSeparados);
    return $resultado;
}

$formula1 = '-20-4';
$formula2 = '10/2+3';
$formula3 = '40-5-10/3';

$resultado1 = avaliarExpressao($formula1);
$resultado2 = avaliarExpressao($formula2);
$resultado3 = avaliarExpressao($formula3);

echo ("Formula1: " . $formula1 . " Resultado:" . $resultado1 . "<br>");
echo ("Formula2: " . $formula2 . " Resultado:" . $resultado2 . "<br>");
echo ("Formula3: " . $formula3 . " Resultado:" . $resultado3 . "<br>");
