<?php

$pasta = "images";

if(!is_dir($pasta)){//teste se o diretório já não existe
    mkdir($pasta);

    echo "pasta $pasta criada com sucesso!";

}else{

    echo "pasta $pasta já existe!";
}

foreach(scandir($pasta) as $item){
    
    if(!in_array($item, array(".", ".."))){ //pega tudo que não for . ou .. no array
        
        unlink($pasta."/" . $item);
    }
}

echo "<br>Conteúdos da pasta $pasta excluídos!";




?>