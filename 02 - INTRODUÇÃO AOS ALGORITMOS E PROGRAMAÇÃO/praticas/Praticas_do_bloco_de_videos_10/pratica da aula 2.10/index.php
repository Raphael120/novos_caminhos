<?php
require __DIR__ . '/../framework/config.php';
PHPClassName('Aula 10 - Trabalhando com funções');

require __DIR__ . '/functions.php';

PHPClassSession('functions', __LINE__);

var_dump(functionName('IFTO', "NOVOS CAMINHOS", "PROGRAMADOR WEB"));
var_dump(functionName('Raphael', "Silva", "Araújo"));

// var_dump(calcIMC('64', "1.76"));
// var_dump(calcIMC('70', "1.76"));
// var_dump(calcIMC('75', "1.76"));

PHPClassSession('global access', __LINE__);

$weight = 65;
$height = 1.76;

var_dump(calcIMC_Global());

PHPClassSession('static arguments', __LINE__);

$pay = payTotal(200);
$pay = payTotal(150);
$pay = payTotal(500);

var_dump($pay);

PHPClassSession('dinamic arguments', __LINE__);

var_dump(myTeam());
var_dump(myTeam("Raphael"));
var_dump(myTeam("Raphael", "Silva"));
var_dump(myTeam("Raphael", "Silva", "Araújo"));