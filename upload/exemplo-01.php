<form method="POST" enctype="multipart/form-data">
    
    <input type="file" name="fileUpdload">

    <button type="submit">Send</button>

</form>

<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){ //se o método de request for POST

    $file = $_FILES["fileUpdload"];

    if($file["error"]){ //Se deu erro ao subir 
        
        echo "<div style='color: red; border: 1px solid red; max-width: 14rem; padding: .5rem;'><strong>Erro: Por favor selecione um arquivo válido!</strong></di>";

        //throw new Exception("Error: " . $file['error']);
    }else{

        $dirUploads = "uploads";

        if(!is_dir($dirUploads)){ //se o diretório não existir
            mkdir($dirUploads); //cria o diretório
    
        }
    
        if(move_uploaded_file($file["tmp_name"], $dirUploads . DIRECTORY_SEPARATOR . $file["name"])){ //move o arquivo para a pasta de destino
            echo "<div style='color: green; border: 1px solid green; max-width: 14rem; padding: .5rem;'><strong>Upload realizado com sucesso!</strong></di>";
    
        }else{
            $div = "<div style='color: red; border: 1px solid red; max-width: 14rem; padding: .5rem;'><strong>Não foi possível realizar o upload!</strong></di>";
            echo $div;
            //throw new Exception($div);
        
        }
    }


}
?>