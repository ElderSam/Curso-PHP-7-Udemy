<?php

    /*A interface obriga classe a implementar todas as funçoes dela */
    interface Transporte{

        public function acelerar($vel);
        public function frenar($vel);
        public function trocarMarcha($marcha);

    }

?>