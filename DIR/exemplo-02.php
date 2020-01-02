<?php

$images = scandir("images");//escaneia tudo que está no diretório
//var_dump($images);

$data = array();

foreach($images as $img){
    if(!in_array($img, array(".", ".."))){ //in_array(needle, haystack): nedle é o que está procurando e haystack são as opções

        $filename = "images" . DIRECTORY_SEPARATOR . $img;

        $info = pathinfo($filename);
        //var_dump($info);
        $info["size"] = filesize($filename); //cria um nó no array com o valor do tamanho do arquivo
        $info["modified"] = date("d/m/Y H:i:s", filemtime($filename));
        $info["url"] = "http://localhost/CURSO_PHP7/DIR/".str_replace("\\", "/", $filename);//mostra um link para mostrar a imagem ou o arquivo
        
        array_push($data, $info);//insere no array $data o $info
    }
}

echo json_encode($data);
?>