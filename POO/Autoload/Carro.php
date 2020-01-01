<?php
    
    /* classe abstrata não pode ser implementada, isso será feito pelas classes filhas */
    abstract class Carro implements Transporte{
        
        //atributos
        protected $numRodas = 4;

        //métodos da interface Transporte implementados
        public function acelerar($vel){
            echo "<br>O veículo acelerou até " . $vel . " km/h";
        }

        public function frenar($vel){
            echo "<br>O veículo frenou até " . $vel . " km/h";
        }

        public function trocarMarcha($marcha){
            echo "<br>O veículo engatou a marcha " . $marcha;
        }
        
        public function mostrar(){
            echo "Numero de Rodas: " . $this->numRodas;
        }

    }
?>