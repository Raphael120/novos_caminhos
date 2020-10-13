<?php

// Questão 1
// Considere a function incompleta abaixo e escreva um código que
// resolva o seguinte problema

// Dado um ano, retorne o século em que ele se encontra.
// O primeiro século se estende do ano 1 até e incluindo o ano 100,
// o segundo segundo século do ano 101 até e incluindo o ano 200,
// e assim sucessivamente.

//Exemplo

//Para $ano = 1905, a saída deve ser
//centuryFromYear(year) = 20;
//Pois year = 1700, a saída deve ser
//centuryFromYear(year) = 17.

//Retorno inteiro
//O número do século em que se encontra o ano.

function centuryFromYear( $year)
{
	
	// No negative value is
	// allow for year
	if ($year <= 0)
		echo "0 and negative is not allow"
			, "for a year";

	// If year is between 1 to 100 it
	// will come in 1st century
	else if($year <= 100)
		echo "1st century\n";

	else if ($year % 100 == 0)
		echo $year / 100 ," century";
	else
		echo floor($year / 100) + 1 
					, " century";	 
}

	// Driver Code
	$year = 374;
	centuryFromYear($year);

	// RESPOSTA: SÉCULO 4