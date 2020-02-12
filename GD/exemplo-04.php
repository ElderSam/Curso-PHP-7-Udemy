<?php

header("Content-type: image/jpeg");

$file = "wallpaper.jpg";

//print_r(getimagesize($file)); //para mostrar informações do arquivo, como as dimensões x e y
list($old_width, $old_height) = getimagesize($file);


$old_image = imagecreatefromjpeg($file); //pega a imagem existente

$new_width = 256;
$new_height = ($new_width * $old_height) / $old_width; //aplica a regra de 3 para descobrir a altura equivalente

$new_image = imagecreatetruecolor($new_width, $new_height); //gera imagem nova e pega todas as cores da antiga

//imagecopyresampled(dst_image, src_image, dst_x, dst_y, src_x, src_y, dst_w, dst_h, src_w, src_h)
imagecopyresampled($new_image, $old_image, 0, 0, 0, 0, $new_width, $new_height, $old_width, $old_height);

imagejpeg($new_image); //cria imagem mostrando na tela

//limpa imagens da memória
imagedestroy($old_image);
imagedestroy($new_image);

?>