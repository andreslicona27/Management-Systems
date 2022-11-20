<?php 
    require_once "Cuatro_ruedas.php";
    class Coche extends Cuatro_ruedas {
        private $numero_cadenas_nieve;

        // BUILDER
        public function __construct($color, $peso, $puertas) {
            $this->setColor($color);
            $this->setPeso($peso);
            $this->setNumeroPuertas($puertas);
        }

        // SETTERS / GETTERS
        public function setNumero_cadenas_de_nieve($numero_cadenas_nieve){
            $this->numero_cadenas_nieve = $numero_cadenas_nieve;
        }

        public function getNumero_cadenas_nieve(){
            return $this->numero_cadenas_nieve;
        }


        // FUNCTIONS 
        public function anadir_cadenas_nieve($num){
            if (($this->numero_cadenas_nieve - $num) < 0){
                $this->numero_cadenas_nieve = 0;
            } else {
                $this->numero_cadenas_nieve -= $num;
            }
        }

        public function quitar_cadenas_nieve($num){
            parent::anadir_persona($peso_persona);

            if ($this->getPeso() <= 1500 && $this->numero_cadenas_nieve <= 2) {
                print "Necesitas 4 cadenas de nieve </br>";
            }

        }
    }

 ?>