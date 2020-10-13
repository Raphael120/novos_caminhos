<?php

// Questão 10

// Escreva uma função que inverta os caracteres
// entre parênteses (possivelmente aninhados)
// na string de entrada.

// As strings de entrada sempre serão bem
// formadas com ()s correspondentes .

// Exemplo

// Para inputString = "(bar)", a saída deve ser "rab"
// Para inputString = "foo(bar)baz", a saída deve ser "foorabbaz"

// Para inputString = "foo(bar)baz(blim)",
// a saída deve ser "foorabbazmilb"


$inputString = "foo(bar(baz))blim";

function reverseInParentheses($inputString)
{
     while (preg_match('/\(([^()]*)\)/', $inputString, $m))
        $inputString = str_replace($m[0], strrev($m[1]), $inputString);
    return $inputString;
}

echo reverseInParentheses($inputString);

// RESPOSTA = foobazrabblim