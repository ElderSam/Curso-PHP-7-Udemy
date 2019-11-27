<?php

    session_start();
    

    $sessionID = session_id();
    //session_regenerate_id(); //atualiza o id da sesão sempre que atualiza a página
    echo "<br> ID da Sessão: ". $sessionID . "<br>";
    
    /*echo "<br>Todos as variáveis dessa Sessão: ";
    var_dump($_SESSION);*/
    /*session_unset(); //limpa variáveis de sessão, porém o usuário ainda é reconhecido no sistema
    
    session_destroy(); //limpa variáveis de sessão, mas remove o usuário */

    //echo "<br>caminho que guarda a sessão: " . session_save_path();

    /*echo "<br><br>Status da Sessão: <br>";
    
    switch(session_status()){ //retorna o estado atual da sessão

        case PHP_SESSION_DISABLED : // = 0
        echo "a sessão está desabilitada";
        break;

        case PHP_SESSION_NONE : // = 1
        echo "a sessão está Habilitada, mas não existe nenhuma Ativa";
        break;

        case PHP_SESSION_ACTIVE : // = 2
        echo "a sessão está Habilitada e uma sessão existe";
        break;
    }   */
    

    $ip = $_SERVER['REMOTE_ADDR']; //pega o IP de quem acessa a página. OBS: Se estiver no localhost então talvez o IP apareca como ::1
    //echo "Seu IP: " . $ip . "<br>";

    $page = $_SERVER['SCRIPT_NAME']; //pega o nome do arquivo atual ou a página que chamou esse arquivo (config.php)
    //echo "Arquivo atual: " . $page . "<br>";
    
    require_once('connection.php'); //conecta com o banco de dados

    $sql = "INSERT INTO logs (ip, pageAcess, sessionID) VALUES(?, ?, ?)";
    $query = $pdo->prepare($sql);
    $query->execute(array($ip, $page, $sessionID));


    /* nesse arquivo pode ter recursos para serem utilizado
    e tratamento de erros */

    /* ----------------------------------------------------------------------------------- */

?>