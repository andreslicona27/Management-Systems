<?php 
    require_once "Cuatro_ruedas.php";
    abstract class Camion extends Cuatro_ruedas {
        private $longitud;

        // SETTERS / GETTERS
        public function setLongitud($longitud){
            $this->longitud = $longitud;
        }

        public function getLongitud(){
            return $this->longitud;
        }


        // FUNCTIONS 
        public function anadir_remolque($remolque){
            $this->longitud += $remolque;
        }

    }

 ?>