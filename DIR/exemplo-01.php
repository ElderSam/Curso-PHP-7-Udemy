<?php

$name = "image";

if(!is_dir($name)){ //verifica se o diretório não existe
    mkdir($name);
    echo "Diretório $name criado com sucesso!";
}else{
    rmdir($name);
    echo "Já existe o diretório: $name, então foi removido!";
}
?>