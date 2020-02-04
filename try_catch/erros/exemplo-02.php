<?php
//mostra todos os erros, mas não as notícias
error_reporting(E_ALL & ~E_NOTICE); //sobrescreve o que está no php.ini

$nome = $_GET["nome"];

echo $nome;

?>