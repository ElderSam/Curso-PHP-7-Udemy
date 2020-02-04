<?php
/* Criar um Cookie na máquina do usuário */

$data = array(
    "empresa"=>"Cyborg Systems"
);

//setcookie("NOME", json, tempoExistencia);
setcookie("NOME_DO_COOKIE", json_encode($data), time() + 3600); //cria um Cookie para existir por 1 hora (3600 seg)

echo "OK";

/* para o ver o Cookie gerado pelo site no nagegador: F12, aba aplication -> cookies */
?>