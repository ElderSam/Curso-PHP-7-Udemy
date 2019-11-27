<?php
    require_once('config.php');
    
    $_SESSION['nome'] = 'Guest';

    echo "Sessão iniciada <br>
    Nome: " . $_SESSION['nome'];

?>