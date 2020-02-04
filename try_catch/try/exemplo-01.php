<?php

/* Seção 15: Tratando Erros com Try Catch */

//tratando Excessões

try{ //tente

    //forçando dar um Erro:
    throw new Exception("Houve um erro", 400);

}catch(Exception $e){ //se der erro, então pegue o erro, e "joga" para ser resolvido

    echo json_encode(array(
        "message"=>$e->getMessage(),
        "line"=>$e->getLine(),
        "file"=>$e->getFile(),
        "code"=>$e->getCode()
    ));
}
?>