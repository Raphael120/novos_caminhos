<?php
require __DIR__ . '/../framework/config.php';
PHPClassName('2.9 - Requisição de Arquivos');


PHPClassSession('include, include_once', __LINE__);

include "file.php";
echo "<p>CONTINUE</p>";

include "header.php";

include __DIR__."/header.php";

var_dump(__DIR__);

$profile = new stdClass();
$profile ->name = "Raphael";
$profile -> company = "Residência";
$profile -> email = "raphaelaraujotoc@outlook.com";
var_dump($profile);

include_once __DIR__ ."/header.php";

var_dump(include_once __DIR__ ."/header.php");

PHPClassSession('require, require_once', __LINE__);

// require "file.php";
// echo "<p>CONTINUE</p>";