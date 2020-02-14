<?php

require_once("vendor/autoload.php");

$app = new \Slim\Slim(); //cura um objeto para configurar cada uma das rotas

$app->get('/', function(){ //cria a rota principal
    //echo 'home Page';

    echo json_encode(array(
        'date'=>date("Y-m-d H:i:s")
    ));
});

/*cria uma rota para ser acessada pelo método GET
'/hello/:name' é a rota  */
$app->get('/hello/:name', function ($name){ 
    echo "Hello, " . $name; //resposta da rota
});

$app->run(); //executa
//ex: localhost/Slim_Framework/hello/dev retorna hello dev

?>