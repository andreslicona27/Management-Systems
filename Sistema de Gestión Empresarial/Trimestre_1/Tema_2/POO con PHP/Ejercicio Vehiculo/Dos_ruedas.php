<?php 
    require_once "Vehiculo.php";
    class Dos_ruedas extends Vehiculo {
        private $cilindrada;

        // SETTERS / GETTERS
        public function setCilindrada($cilindrada){
            $this->cilindrada = $cilindrada;
        }

        public function getCilindrara(){
            return $this->cilindrada;
        }

        // FUNCTIONS
        public function poner_gasolina($litros){
            $this->setPeso($this->getPeso() + $litros);
        }

        public function anadir_persona($peso_persona){
            $this->setPeso($this->getPeso() + $peso_persona + 2);
        }

    }

 ?>