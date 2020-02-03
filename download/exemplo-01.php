<?php
/* Fazendo Download de arquivos remotos (servidor, da internet, etc...)*/7

$link = "https://www.motortrend.com/uploads/sites/5/2018/06/2019-Ford-Mustang-Shelby-GT350-front-three-quarter-in-motion-02.jpg?fit=around%7C875:492";

$content = file_get_contents($link);

$parse = parse_url($link);

var_dump($parse); //mostra vários dados sobre a imagem, como o path, o site, o nome, etc...

var_dump($parse["path"]); //mostra o caminho completo da imagem ( o PATH)

$basename = basename($parse["path"]); //retorna o nome do arquivo

$file = fopen($basename, "w+"); //fopen: abre um arquivo, w+ para escrita (write), e o + significa que vai testar se o arquivo não existe e se isso acontecer cria 

fwrite($file, $content);

fclose($file);

?>

<img src="<?=$basename?>">