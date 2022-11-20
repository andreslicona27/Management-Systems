<?php 
    require_once "Bebida.php";

    class Agua_Mineral extends Bebida{
        private $origenAgua;

        // BUILDER 
        public function __construct($identificador, $cantidadLitros, $precio, $marca, $origenAgua){
            parent::__construct($identificador, $cantidadLitros, $precio, $marca);
            $this->origenAgua = $origenAgua;
        }

        // SETTERS / GETTERS
        public function setOgirinAgua($origenAgua) {
            $this->origenAgua = $origenAgua;
        }

        public function getOrigenAgua() {
            return $this->origenAgua;
        }

        public function getId(){
            return parent::getId();
        }
        
        
        public function visualizar() {
            parent::visualizar();
            print ('manatial '. $this->manantial.'<br>');
        }
    }
?>