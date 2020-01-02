<?php

$file = fopen("teste.txt", "w+");
fclose($file);

unlink("teste.txt"); //apaga o arquivo

echo "Arquivo removido com sucesso!";
?>