<?php
namespace Cliente;

class Cadastro extends \Cadastro{ //herda classe Cadastro da pasta anterior
    
    public function registrarVenda(){
        echo "venda registrada para o cliente " . $this->getNome();
    }
}

?>