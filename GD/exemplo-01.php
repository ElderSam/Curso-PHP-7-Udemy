<?php

//Exemplo GD: Graphic Desing
//Criando uma imagem pelo PHP

header("Content-Type: image/png"); //para dizer que o tipo desse arquivo é uma imagem

$image = imagecreate(256, 256); //tamanhos da imagem

$black = imagecolorallocate($image, 0, 0, 0);  //imagecollorallocate($image, rgb) -> RGB ( red, green, blue): 0,0,0 = preto
$red = imagecolorallocate($image, 255, 0, 0);

//imagestring(image, font, x, y, string, color); //obs: a fonte vai de 0 a 5, x e y é a posição da imagem.
imagestring($image, 5, 60, 120, "Curso de PHP 7", $red);

imagepng($image); //gera uma image png
imagedestroy($image); // para apagar a imagem, ou fechar o arquivo


?>