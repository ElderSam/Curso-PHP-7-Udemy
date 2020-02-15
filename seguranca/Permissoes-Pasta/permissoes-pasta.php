<?php

/* Entendendo as permissões de pasta 

as permissões vão de 0 a 7
    0 - sem permissão
    1 - execução
    2 - gravação
    3 - execução e gravação
    4 - leitura
    5 - leitura e execução
    6 - leitura e gravação
    7 - leitura, gravação e execução

permissões de pastas no sistema Unix: ex. 755 (o dono possui todas as permissões e o grupo de usuário e o usuário 'guest' possuem permissão de leitura e execução)
https://www.php.net/manual/en/function.chmod.php

função chmode() pode mudar as permissões da pasta
CUIDADO!! NÃO DEIXE PERMISSÃO 777
*/

$pasta = "arquivos";
$permissao = "0775";

if(!is_dir($pasta)) 
    mkdir($pasta, $permissao);


echo "Diretório criado com suceso!";

//chmod($pasta, 0755);
