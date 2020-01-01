<?php

    class Pessoa{

        //atributos
        private $nome;
        private $sexo;
        private $idade;

        //Construtor (método mágico)
        public function __construct($nome ='', $sexo = '', $idade = 0){
            echo "<br>construindo pessoa ...<br>";
            $this->setNome($nome);
            $this->setSexo($sexo);
        }

        //Destrutor (método mágico) executa automaticamente quando o objeto não for mais usado
        public function __destruct(){
            echo "<br>Destruindo ...<br>";
        }

        //Getters and Setters
        public function getNome(){
            return $this->nome;
        }
        public function setNome($nome){
            $this->nome = $nome;
        }

        public function getSexo(){
            return $this->sexo;
        }
        public function setSexo($sexo){
            $this->sexo = $sexo;
        }
        
        public function getIdade(){
            return $this->idade;
        }
        public function setIdade($idade){
            $this->idade = $idade;
        }

        //toString: transforma para String __toString também é um 'método mágico'
        public function __toString(){
            return $this->nome . " " . $this->sexo . " " . $this->idade;
        }

        //Métodos
        public function exibe(){
            echo '<br>Nome: '.$this->nome .
                 '<br>Sexo: '.$this->sexo .
                 '<br>Idade: '.$this->idade;
        }

    }
    echo "pessoa 1:";
    $p1 = new Pessoa('Samuel', 'Masculino');
    $p1->exibe();

    echo "<br><br>pessoa 2:";
    $p2 = new Pessoa('Maria', 'Feminino');
    $p2->exibe();
    echo "<br>";
    $p1->setNome('Elder Samuel');
    $p1->exibe();

    echo "<br><br>pessoa 3:";
    $p3 = new Pessoa();
    $p3->getNome();
    $p3->setNome('João');
    echo $p3->getNome();
    echo "<br>";
    echo $p1; //em PHP só tem como tranformar um objeto em string através do método __toString na própria classe
    
?>