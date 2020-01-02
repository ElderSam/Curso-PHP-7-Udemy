<?php

//Abrindo um arquivo e escrevendo sobre ele
$file = fopen("log.txt", "a+"); //w+ abre um arquivo para escrita (write) do zero, e a+ adiciona 

fwrite($file, date("Y-m-d H:i:s") . "\r\n"); //escreve no arquivo. "\r\n é para pular linha no arquivo txt
fclose($file);//fecha o arquivo

echo "Arquivo criado com sucesso!";

?>
