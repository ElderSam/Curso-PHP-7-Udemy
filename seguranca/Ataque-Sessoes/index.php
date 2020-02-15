<?php
/* SSL e PHP Session Hijacking
SSL: Security Socket Layer. 
É uma camada de segurança que encripta (embaralha) as informações para o transporteentre o Servidor e Cliente.
Sites que possuem HTTPS tem SSL
--------------------------

Session Hijacking ou Cookie Hijacking é quando as informações enviadas entre o Cliente e Servidor
 são interceptadas por um invasor, então ele pode capturar pacotes com dados da sessão
 e forçar um login somente através do ID da ssessão capturado ou Cookie, copiando o texto e 
 colocando em um arquivo de cookie e “enganando” o sistema à pensar que ele é o usuário.

Uma das coisas que dá para fazer para aumentar a segurança, 
é a cada login que o usuário faz, regenerar o ID da Sessão.
*/

//Inicia a sessão
session_start();

//echo "Antigo ID da sesão: " . session_id() . "<br>";

//Depois de verificar login e senha, reinicie o ID da sessão
session_destroy();

session_start();
session_regenerate_id(); //regenera o ID de sessão, para aumentar a segurança

echo "Novo ID da sessão: " . session_id();


?>