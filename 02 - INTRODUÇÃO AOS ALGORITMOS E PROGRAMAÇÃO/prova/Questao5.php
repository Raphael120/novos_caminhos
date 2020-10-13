<?php

// Questão 5
// Dada uma sequência de inteiros como um array,
// determine se é possível obter uma sequência
// estritamente crescente removendo não mais do que um elemento do array.

//Exemplo

// Se $sequence = [1, 3, 2, 1], a saída deve ser false
// Não há nenhum elemento neste array que possa ser
// removido para obter uma sequência estritamente crescente.

// Se $sequence = [1, 3, 2], a saída deve ser true.
// Você pode remover 3 do vetor para obter a sequência
// estritamente crescente [1, 2]. 
// Como alternativa, você pode remover 2 para obter a
// sequência estritamente crescente [1, 3].


$sequence = [3, 5, 67, 98, 3];

function almostIncreasingSequence($sequence)
{
     for($erasedIndex = 0; $erasedIndex < count($sequence); $erasedIndex++) {
            $increasing = true;
            $last = 0;
            $start = 1;
            if(!$erasedIndex) {
                $last = 1;
                $start = 2;
            }
            for($j = $start; $j < count($sequence); $j++) {
                if($j === $erasedIndex) {
                    continue;
                }
                if($sequence[$j] <= $sequence[$last]) {
                    $increasing = false;
                    break;
                }
                $last = $j;
            }
            if($increasing) {
                return "true";
            }
        }
        return "false";
}

echo almostIncreasingSequence($sequence);

// RESPOSTA = TRUE