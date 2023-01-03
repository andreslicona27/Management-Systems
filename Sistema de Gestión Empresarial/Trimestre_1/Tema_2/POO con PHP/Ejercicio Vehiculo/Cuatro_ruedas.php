<?php 
    require_once "Vehiculo.php";
    abstract class Cuatro_ruedas extends Vehiculo {
        private $numero_puertas;

        // BUILDERS
        public function __construct($color, $peso, $numero_puertas){
            $this->setColor($color);
            $this->setPeso($peso);
            $this->numero_puertas = $numero_puertas;
        }

        // SETTERS / GETTERS
        public function setNumeroPuertas($numero_puertas){
            $this->numero_puertas = $numero_puertas;
        }

        public function getNumeroPuertas(){
            return $this->numero_puertas;
        }

        // FUNCTIONS
        public function repintar($color){
            parent::setColor($color);
        }

        public function anadir_persona($peso_persona){
            $this->setPeso($this->getPeso() + $peso_persona);
        }
    }

 ?>