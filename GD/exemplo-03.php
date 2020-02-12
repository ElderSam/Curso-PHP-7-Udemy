<?php

/* Fontes TTF (GD)
Função Image TTF text: carrega imagens com a fonte true type
OBS: Tem que fazer o download das 2 fontes que vamos utilizar
//A única coisa que vai mudar do exemplo-02.php é que em vez de usar imagestring, será imagettftext (para adicionar a fonte)
*/

header("Content-type: image/jpeg");

$image = imagecreatefromjpeg("certificado.jpg"); //Pega uma imagem existente

$titleColor = imagecolorallocate($image, 0, 0, 0); //gera cor preta
$gray = imagecolorallocate($image, 100, 100, 100); //gera cor cinza. Obs: toda vez que os 3 valores do RGB estiver como mesmo valor, então vai gerar cor cinza, quanto mais próximo do 0 é mais escuro, e quanto mais próximo de 255 é mais clara

$fontBevan = dirname(__FILE__) . DIRECTORY_SEPARATOR ."fonts". DIRECTORY_SEPARATOR . "Bevan" . DIRECTORY_SEPARATOR . "Bevan-Regular.ttf";

$fontPlayball = dirname(__FILE__) . DIRECTORY_SEPARATOR ."fonts".DIRECTORY_SEPARATOR."Playball".DIRECTORY_SEPARATOR."Playball-Regular.ttf";

//a função image ttftext dá para adicionar fontes e tem tamanhos de fonte maiores
//imagettftext(image, font, , angule, x, y, color, caminho da fonte, string);
imagettftext($image, 32, 0, 320, 250, $titleColor, $fontBevan, "CERTIFICADO"); //posição x,y = 450, 150, na fonte 5 (maior), com o texto e cor $titleColor (preto)
imagettftext($image, 32, 0, 375, 350, $titleColor, $fontPlayball, "João das Neves");
imagestring($image, 3, 440, 370, utf8_decode("Concluído em: "). date("d/m/Y"), $titleColor);


imagejpeg($image);
//imagejpeg($image, "SOCORRO.jpg");
imagedestroy($image);



?>