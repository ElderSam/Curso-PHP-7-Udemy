<?php

/* o cURL é um "robô", que faz requisições de dados através de URL's e recebe esses dados */

$cep = "01310100";

$link = "viacep.com.br/ws/$cep/json/";

$ch = curl_init($link); //biblioteca que iniciou o arquivo

curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); //curl_setopt(ch, option, value); SE O VALUE = 1 (TRUE) ENTÃO TEM RETORNO 
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0); //validação 0 = false

$response = curl_exec($ch); //executa o acesso para a URL desejada

curl_close($ch); //fecha, libera a conexão

$data = json_decode($response, true); //transforma JSON em Array

print_r($data);

?>