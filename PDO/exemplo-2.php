<?php
    $conn = new PDO("mysql:dbname=dbphp7;host=localhost", "root", "");
    
    //$sql = "INSERT INTO tb_usuarios (deslogin, dessenha) VALUES (:LOGIN, :PASSWORD)";
    //$sql = "UPDATE tb_usuarios SET deslogin=:LOGIN, dessenha=:PASSWORD WHERE idusuario=:ID";
    $sql = "DELETE FROM tb_usuarios WHERE idusuario=:ID";
   

    $stmt = $conn->prepare($sql);

    $id = 5;
    /*$login = "Pedro";
    $password = "27362343";*/

    $stmt->bindParam(":ID", $id);
   /* $stmt->bindParam(":LOGIN", $login);
    $stmt->bindParam(":PASSWORD", $password);*/

    $res = $stmt->execute();

    if($res){
        echo "Excluido com sucesso!";
    }else{
        echo "Erro ao excluir dado!";
    }
?>