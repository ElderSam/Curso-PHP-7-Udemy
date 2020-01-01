<?php
//EXEMPLO COM TRANSAÇÃO - COMMIT E ROLLBACK
    $conn = new PDO("mysql:dbname=dbphp7;host=localhost", "root", "");
    $conn->beginTransaction(); //inicia a transação do BD
    
    $sql = "DELETE FROM tb_usuarios WHERE idusuario=?";
    $stmt = $conn->prepare($sql);
    $id = 1;
    $res = $stmt->execute(array($id));
   
    $c = false;
    $t = false;

    //$c = $conn->rollback();//cancela a transação (ctrl+Z)
    $t = $conn->commit(); //confirma a transação

    if($t){       
        echo "Excluido com sucesso! " . $t;   
    }   
    else if($c){
        echo "Operação cancelada " . $c;
    }else{
        echo "Erro ao excluir dado!";
    }
?>