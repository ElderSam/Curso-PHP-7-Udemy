<?php

     require_once('config.php');

     if(isset($_SESSION['user'])){
       
        echo "logado <br> 
        Usuario: " . $_SESSION['user'];
        echo "<script> window.location = 'dashboard.php'; </script>"; //vai para outra página
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>INDEX</title>
    <style>
    form{
        position: relative;
        left: 35%;
        background-color: grey;
        padding: 20px 20px 20px 20px;
        max-width: 250px;
    }
    </style>
</head>
<body>
<br><br>
    <form method="GET" action="config.php">
        <h3>Login</h3>
        <input type="text" name="user" placeholder="nome de usuário" required=""/> <br><br>
        <input type="submit" value="Entrar"/>
    </form>
</body>
</html>