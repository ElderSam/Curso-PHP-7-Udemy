<?php

//OBS: tem que baixar a imagem certificado.jpg para funcionar 
$image = imagecreatefromjpeg("certificado.jpg");

$titleColor = imagecolorallocate($image, 0, 0, 0); //gera cor preta
$gray = imagecolorallocate($image, 100, 100, 100); //gera cor cinza. Obs: toda vez que os 3 valores do RGB estiver como mesmo valor, então vai gerar cor cinza, quanto mais próximo do 0 é mais escuro, e quanto mais próximo de 255 é mais clara

imagestring($image, 5, 450, 150, "CERTIFICADO", $titleColor); //posição x,y = 450, 150, na fonte 5 (maior), com o texto e cor $titleColor (preto)
imagestring($image, 5, 440, 350, utf8_decode("João das Neves"), $titleColor);
imagestring($image, 3, 440, 370, utf8_decode("Concluído em: "). date("d/m/Y"), $titleColor);

//Renderizando a imagem:
//header("Content-Type: image/png"); 
//imagejpeg($image);//Se quiser mostrar na tela a imagem:

//Se quiser baixar a imagem, em vez de renderizar -> imagejpeg(image, nome.jpg, qualidade);
imagejpeg($image, "certificado-".date("Y-m-d") . ".jpg"); //gera imagem jpeg com qualidade máxima (100)
//imagejpeg($image, "certificado-".date("Y-m-d") . ".jpg", 10); //colocando o terceiro parâmetro, gera imagem com qualidade baixa. Vai de 0 a 100 (qualidade máxima).

imagedestroy($image);

echo "Download realizado com sucesso!<br>";

?>