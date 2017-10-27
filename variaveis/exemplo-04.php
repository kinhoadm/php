<?php
/*
$nome = (int)$_GET["a"];

var_dump($nome);

echo ($nome);
*/

//Captura endereço ip do usuário
$ip = $_SERVER["REMOTE_ADDR"];

//Captura endereço do arquivo acessado
$nomeArquivo = $_SERVER["SCRIPT_NAME"];

echo $ip;

echo $nomeArquivo;

?>