<?php

$filename = "logo.png";

$base64 = base64_encode(file_get_contents($filename)); //file_get_contents lê o conteúdo inteiro de um arquivo
//base64_encode transforma todo conteúdo em base 64

$fileinfo = new finfo(FILEINFO_MIME_TYPE); //cria um objeto para pegar o tipo de arquivo

$mimetype = $fileinfo->file($filename); //chama o método que retorna o mime type do arquivo

$base64encode = "data:" . $mimetype . ";base64," . $base64;

?>

<a target="_blank" href="<?=$base64encode?>">Link para Imagem</a>

<img src="<?=$base64encode?>" alt="logo da hcode">