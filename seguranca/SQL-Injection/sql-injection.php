<?php
/* exemplo SQL Injection

OBS: quando usamos o PDO para acesso ao Banco de Dados, não temos esse problema, 
até porque também deve fazer o bind dos dados recebidos, para evitar o SQL INJECTION

para testar, coloque no navegador: localhost/seguranca/sql-injection.php?id=1%20or%201=1%20--
quando eu coloco o GET valendo: id=1 or 1=1 --, 
o que acontece é que ele pega dados do id que passei, 
mas com o OR executa o que vem depois e com o -- commenta para ignorar o que vem após o --, 
retornando todos os dados daquela tabela, e não somente um ID específico
*/


$id = (isset($_GET["id"]))?$_GET["id"]:1; //se não for passado o id, então ele é 1
echo "id = " . $id . "<br>";

/* PARA IMPEDIR O SQL INJECTION
if(!is_numeric($id) || strlen($id) > 5){ //se o id não for um número
    exit("Pegamos você! Achou que ia usar SQL Injection, haha");
} */

$conn = mysqli_connect("localhost", "root", "", "dbphp7");

$sql = "SELECT * FROM tb_usuarios WHERE idusuario = $id";

$exec = mysqli_query($conn, $sql);

while($resultado = mysqli_fetch_object($exec)){

    echo $resultado->deslogin . "<br>";

}