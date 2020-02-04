<?php

/* Recuperar um Cookie gerado */

//variável $_COOKIE é uma super global do PHP

if(isset($_COOKIE["NOME_DO_COOKIE"])){
    var_dump(json_decode($_COOKIE["NOME_DO_COOKIE"], true)); //tranforma o cookie de JSON para ARRAY
    
    //obs: se eu não colocar true, no json_decode, ele tranforma o JSON em um Objeto e não em Array
}

?>