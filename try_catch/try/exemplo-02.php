<?php

/* Seção 15: Tratando Erros com Try Catch */
//tratando Excessões
// TRY - CATCH - FINALLY

function trataNome($name){
 
    if(!$name){
        throw new Exception("Nenhum nome foi informado.", 1);
    }

    echo ucfirst($name)."<br>"; //ucfirst transforma a primeira letra/caracter em maiúsculo

}

try{

    //executa a função trataNome 2x
    trataNome("joão das Neves");
    trataNome("");

}catch(Exception $e){

    echo $e->getMessage();

}finally{

    echo "<br>Executou o Try<br>";
}

?>