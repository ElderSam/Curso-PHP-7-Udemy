<?php

//Lendo conteúdo de arquivos
$filename = "usuarios.csv";

if(file_exists($filename)){

    $file = fopen($filename, "r");
    $headers = explode(",", fgets($file)); //explode toda vez que encontra a vírgula, e transforma em array. tranforma em array fgets pega tudo que está na linha 1
    
    $data = array();
    
    while($row = fgets($file)){ //enquanto tiver linhas
        
        $rowData = explode(",", $row);
        $linha = array();

        for($i = 0; $i < count($headers); $i++){
            $linha[$headers[$i]] = $rowData[$i]; //$linha[$headers[$i]] Pega o nome da coluna que está na posição $i do $headers e usa como key para receber o valor
        }

        array_push($data, $linha);
    }
   
    fclose($file);

    echo json_encode($data);

}

?>