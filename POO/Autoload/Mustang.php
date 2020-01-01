<?php

    class Mustang extends Carro{ //herda todos os atributos e métodos de Carro (publicos e protegidos)

        private $marca = "Ford";

        public function mostrar(){
            echo "<br>Marca: " . $this->marca . "<br>";
            parent::mostrar();
                 
        }
    }
?>