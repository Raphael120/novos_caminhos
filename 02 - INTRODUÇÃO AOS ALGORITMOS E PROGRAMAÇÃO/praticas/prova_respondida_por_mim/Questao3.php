<?php

// Questão 3
// Dado um vetor de inteiros, encontre o par de elementos
// adjacentes que possui o maior produto
// e depois retorne o valor desse produto.

//Exemplo

//Pois inputArray = [3, 6, -2, -5, 7, 3], 
// o valor de retorno deve ser 21.
// pois 7 e 3 produz o maior produto.

// Retorno o maior produto
//O maior produto de elementos adjacentes.


// $inputArray =  [3, 6, -2, -5, 7, 3];
$inputArray =  [5, 6, -4, 2, 3, 2, -23];

function adjacentElementsProduct($inputArray) {
   $max = 0;
   for($i = 0; $i < (sizeof($inputArray) - 1); $i++){
       $b = $i+1;
       if($inputArray[$i] > 0 && $inputArray[$b] > 0){
           $max = (($inputArray[$i] * $inputArray[$b]) > $max) ? ($inputArray[$i] * $inputArray[$b]) : $max;
       }
   }

   return $max;
}

echo adjacentElementsProduct($inputArray);


// RESPOSTA = 30 ✅