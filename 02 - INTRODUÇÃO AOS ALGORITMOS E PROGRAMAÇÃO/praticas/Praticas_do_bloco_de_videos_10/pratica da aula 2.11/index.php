<?php
require __DIR__ . '/../framework/config.php';
PHPClassName('2.11 - Constantes Mágicas no PHP');
 
/*
*
*/
PHPClassSession('constantes', __LINE__);

define("COURSE", "PROGRAMADOR WEB"); // É interpretado durante a execução
const AUTHOR = "GOVERNO FEDERAL"; // É interpretado antes da execução

$formation = false;

if ($formation) {
    define("COURSE_TYPE", "Formação");
} else {
    define("COURSE_TYPE", "Curso");
}

$course_type = "Formação";  // VARIÁVEIS DEFINIDAS
$course = "Programador WEB";  // VARIÁVEIS DEFINIDAS
$author = "GOVERNO FEDERAL";  // VARIÁVEIS DEFINIDAS

echo "<p>" . COURSE_TYPE . " " . COURSE .  " do " . AUTHOR ."</p>";
echo "<p> {COURSE_TYPE} {COURSE} do {AUTHOR} </p>";
echo "<p> {$course_type} {$course} do {$author} </p>"; // ANTES DEVE-SE DEFINIR AS VARIÁVEIS

class Config
{

    const USER = "root";
    const HOST = "localhost";
}

var_dump(get_defined_constants(true)["user"]);
// var_dump(get_defined_constants(true));

PHPClassSession('Constantes Mágicas', __LINE__);

var_dump([
    __DIR__,
    __FILE__,
    __LINE__,
    __CLASS__
]);