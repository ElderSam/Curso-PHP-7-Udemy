<?php

//Criando um arquivo CSV

require_once("config.php");

$usuarios = Usuario::getList();
//print_r($usuarios);

$headers = array();

//colunas
foreach($usuarios[0] as $key => $value){
    array_push($headers, ucfirst($key)); //insere no array. ucfirst() é para deixar a primeira letra maiúscula
}

$file = fopen("usuarios.csv", "w+");
fwrite($file, implode(",", $headers) . "\r\n"); //para pular linha: implode(separador, array)

//registros
foreach($usuarios as $row){ //linhas

   $data = array();

   foreach($row as $key => $value){ //campos

       array_push($data, $value);
   }//fim do foreach de campos/coluna

   fwrite($file, implode(",", $data) . "\r\n");
}//fim do foreach de linhas


fclose($file);

?>