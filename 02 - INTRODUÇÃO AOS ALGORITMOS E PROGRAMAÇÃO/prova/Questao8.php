<?php

// Questão 8

// Os números dos ingressos geralmente consistem
// em um número par de dígitos.
// Considere para essa questão que um número
// de bilhete é considerado de sorte
// se a soma da primeira metade dos dígitos
// for igual à soma da segunda metade.

// Dado um número de bilhete n, determine se é sorte ou não.

// Exemplo

// Para $n = 1230, o retorno deve ser  true;
// Para $n = 239017, o retorno deve ser false;


$n = "1230";

function isLucky($n)
{
    $nString = (string) $n;
    $nLen = strlen($nString);
    $firstHalf = str_split(substr($nString,0,$nLen/2));
    $secondHalf = str_split(substr($nString,$nLen/2));
    
    $firstHalfSum = 0;
    $secondHalfSum= 0;
    
    foreach ($firstHalf as $item){
        $firstHalfSum += $item;
    }
    foreach ($secondHalf as $item){
        $secondHalfSum += $item;
    }
    
    if ($firstHalfSum == $secondHalfSum)
        return true;
    return false;
}

echo isLucky($n);

// RESPOSTA = FALSE