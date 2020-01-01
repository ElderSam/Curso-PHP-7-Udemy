<?php

    require_once("config.php");

    use Cliente\Cadastro;

    $cad = new Cadastro();

    $cad->setNome("Elder Samuel");
    $cad->setEmail("eldersamuel98@gmail.com");
    $cad->setSenha("43623");
    //echo $cad;

    $cad->registrarVenda();
?>