<?php 
    require_once "Bebida.php";

    class Bebidas_Azucaradas extends Bebidas{
        private $porcentajeAzucar;
        private $promocion;

        // BUILDER
        public function __construct($identificador, $cantidadLitros, $precio, $marca, $porcentajeAzucar, $promocion){
            parrent::__construct($identificador, $cantidadLitros, $precio, $marca);
            $this->setPorcentajeAzucar($porcentajeAzucar);
            $this->promocion = $promocion;
        }

        // SETTERS / GETTERS
        public function setPorcentajeAzucar($porcentajeAzucar) {
            $this->porcentajeAzucar = $porcentajeAzucar;
        }

        public function getPorcentajeAzucar() {
            return $this->porcentajeAzucar;
        }

        public function setPromocion($promo) {
            $this->promocion = $promo;
        }

        public function getPrecio(){
            if ($this->promocion) {
                return Bebida::getPrecio() * 0.9;
            } else {
                return Bebida::getPrecio();
            }
        }

        public function getIdentificador() {
            return parent::getIdentificador();
        }
    
        public function visualizar() {
            parent::visualizar();
            print ('porcentaje azúcar ' . $this->porcentajeAzucar . '<br> promoción: ' . $this->promocion . '<br>');
        }

    }
?>