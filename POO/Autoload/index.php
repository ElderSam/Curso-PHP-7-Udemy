<?php

    function incluirClasses($nomeClasse){

        if(file_exists($nomeClasse.".php") === true){  //verifica se o arquivo existe
            require_once($nomeClasse.".php");  //inclui
        }
    }

    //spl_autoload_register é executado sempre que precisa incluir uma classe de outro arquivo
    spl_autoload_register('incluirClasses'); //chama a função incluirClasses automaticamente toda vez que necessária

    //Se a classe que precisa incluir estiver em outro diretório / pasta
   /* spl_autoload_register(function($nomeClasse){
        if(file_exists("Abstratas" . DIRECTORY_SEPARATOR . $nomeClasse.".php") === true){ // ex: Abstratas/nomeClasse.php
            require_once("Abstratas" . DIRECTORY_SEPARATOR . $nomeClasse.".php");
        }
    });
*/

    $c1 = new Mustang();
    $c1->mostrar();
    echo "<br>";

    $c1->acelerar(70);
    $c1->frenar(5);
    $c1->trocarMarcha(1);



?>