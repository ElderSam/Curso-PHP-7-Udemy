<?php

/* Manipulando cabeçalho de erros (SET ERRORS RANDLER) */
//TRATANDO ERROS FATAIS

function error_handler($code, $message, $file, $line){

    echo json_encode(array(
        "code"=>$code,
        "message"=>$message,     
        "file"=>$file,
        "line"=>$line 
    ));
}

// coloca nome da função substituta caso a anterior dê ERRO
set_error_handler("error_handler");


//EXEMPLO: GERANDO ERRO EM TEMPO DE EXECUÇÃO

$total = 100 / 0; //divisão por zero (vai dar erro)

?>