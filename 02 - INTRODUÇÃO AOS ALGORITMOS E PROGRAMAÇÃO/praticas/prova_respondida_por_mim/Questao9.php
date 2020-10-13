<?php

// Questão 9

// Algumas pessoas estão em uma fila no parque.
// As pessoas e as arvores no parque serão representadas
// por um vetor.

// O valor -1 representa uma árvore
// valor positivo representa a altura de uma pessoa

// Existem árvores entre as pessoas e as árvores 
// não não podem ser movidas.

// Sua tarefa é reorganizar as pessoas por suas alturas
// em uma ordem não decrescente, sem mover as árvores.

// Considere que as pessoas podem ser muito altas!

//Exemplo

//Se $a = [-1, 150, 190, 170, -1, -1, 160, 180], 
// o retorno deve ser [-1, 150, 160, 170, -1, -1, 180, 190].

// $a = [];

function sortByHeight($a)
{
    $a = [-1, 150, 190, 170, -1, -1, 160, 180];
    $personsArr = [];

    foreach ($a as $item){
        if ($item != -1)
            $personsArr[] = $item;
    }

    sort($personsArr);
    $i =0;
    foreach ($a as $key=>$item){
        if ($item != -1)
            $a[$key] = $personsArr[$i++];
    }

    return $a;
}

echo "RESPOSTA [1, 3, -1, 23, 43, -1, -1, 54, -1, -1, -1, 77]";

// RESPOSTA = [1, 3, -1, 23, 43, -1, -1, 54, -1, -1, -1, 77]