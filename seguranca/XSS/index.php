<!-- 
    Impedindo Cross-site_Scripting_(XSS)
    XSS ocorre quando alguém tenta colocar tags em algum campo, 
    e nesse caso, se o site não estiver usando strip_tags(), o navegador vai interpretar todas as tags
    o mais perigoso é quando tem tags de SCRIPT JavaScript, poise nesse caso, o invasor do site pode ver os cookies dos usuários
-->

<form method="post">

    <input type="text" name="busca">
    <button type="submit">Enviar</button>

</form>

<?php

if(isset($_POST['busca'])){

    //echo $_POST['busca']; //para mostrar exatamente o que foi digitado

    // para permitir tags <strong> e <a>
  //echo strip_tags($_POST['busca'], "<strong><a>");

  //para NÃO permitir nenhuma tag - SEGURO
  echo strip_tags($_POST['busca']);

    echo "<br>";

  //para mostrar exatamente o que foi digitado como STRING (texto)
  //echo htmlentities($_POST['busca']);
}


?>