<?php

// Questão 6
// Dada uma matriz de strings, 
// retorna outra matriz contendo
// todas as suas strings mais longas.

//Exemplo

// Se inputArray = ["aba", "aa", "ad", "vcd", "aba"], 
// o valor de retorno ["aba", "vcd", "aba"].



$inputArray = [];

function allLongestStrings($inputArray)
{
    $inputArray = array(
    'a',
    'abc',
    'cbd',
    'zzzzzz',
    'a',
    'abcdef',
    'asasa',
    'aaaaaa'
);
$cachedLength = 0;
$longest = [];

foreach ($inputArray as $value) {
    $currentLength = strlen($value);
    if ($currentLength > $cachedLength) {
        $longest = [$value];
        $cachedLength = $currentLength;
    } elseif ($currentLength == $cachedLength) {
        $longest[] = $value;
    }
}
var_export($longest);
}

// RESPOSTA = array ('zzzzzz', 'abcdef', 'aaaaaa') LETRA "C" ✅

echo allLongestStrings($inputArray);