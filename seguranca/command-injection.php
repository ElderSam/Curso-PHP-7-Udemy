<?php
/* Exemplo com COMMAND INJECTION */

//Recupera via POST o que foi enviado pelo formulário
if($_SERVER["REQUEST_METHOD"] == 'POST'){
    
    /* para evitar Command Injection:
    $cmd = escapeshellcmd($_POST["cmd"]); //escapa de comandos via POST, pois transforma tudo em String 
    var_dump($cmd);
    */
    
    $cmd = $_POST["cmd"]; //apenas para testar os comandos


    echo "<pre>";

    $comando = system($cmd, $retorno); //assim fica vulnerável, qualquer coisa que viaer via POST será executado diretamete no nosso servidor
    
    echo "</pre>";
}


?>

<form method="post">

    <input type="text" name="cmd">
    <button type="submit">Enviar</button>
</form>