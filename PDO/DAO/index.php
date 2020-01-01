<?php

require_once("config.php");

//Carrega dados de um usuário
/*$root = new Usuario();
$root->loadbyId(3);
echo $root;*/

//Carrega uma lista de usuários
/*$lista = Usuario::getList();
echo json_encode($lista);*/

//Carrega uma lista de usuários buscando pelo login
/*$search = Usuario::search("ma");
echo json_encode($search);*/

//Carrrega um usuário usando o login e senha
$usuario = new Usuario();
$usuario->login("Maria", "123");

echo $usuario;

?>