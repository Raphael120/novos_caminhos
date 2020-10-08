<?php

// Questão 2
// Considere a function incompleta abaixo e escreva um código que
// resolva o seguinte problema

//Dada uma váriavel $inputString, verifique se é um palíndromo .

//Exemplo

//Para inputString = "aabaa", o valor de retorno deve ser true;

//Para inputString = "abac", o valor de retorno deve ser false;

//Resultado booleano
// true se inputString é um palíndromo,
// false se caso contrário.



// PHP code to check for Palindrome string in PHP 
// Using strrev() 
function Palindrome($inputString){ 
	if (strrev($inputString) == $inputString){ 
		return 1; 
	} 
	else{ 
		return 0; 
	} 
} 

// Driver Code 
$original = "zzzazzazz"; 
if(Palindrome($original)){ 
	echo "Palindromo (true)"; 
} 
else { 
echo "Não é um Palindromo (false)"; 
} 

// RESPOSTA: FALSE