<?php 

    class Bebidas{
        private static $identificadorActual = 0;
        private $identificador;
        private $cantidadLitros;
        private $precio;
        private $marca;

        
        // BUILDER
        public function  __construct($identificador, $cantidadLitros, $precio, $marca){
            $this->identificador = self::$identificadorActual + 1;
            $this->cantidadLitros = $cantidadLitros;
            $this->precio = $precio;
            $this->marca = $marca;
            self::$identificadorActual++;
        }

         // SETTERS / GETTERS 
         public function setIdentificador($identificador) {
            $this->identificador = $identificador;
        }

        public function getIdentificador(){
            return $this->identificador;
        }

        public function setCantidadLitros($cantidadLitros) {
            $this->cantidadLitros = $cantidadLitros;
        }

        public function getCantidadLitros() {
            return $this->cantidadLitros;
        }

        public function setPrecio($precio){
            if ($this->promocion == true){
                $this->precio = $precio - ($precio * 0.10);
            } else {
                $this->precio = $precio;
            }
        }

        public function getPrecio() {
            return $this->precio;
        }

        public function setMarca($marca){
            $this->marca = $marca;
        }

        public function getMarca(){
            return $this->marca;
        }

        public function visualizar(){
            print ('id: '. $this->id . '<br> litros: '. $this->litros.'<br> precio: '. $this->precio.'<br> marca: '. $this->marca .'<br>');
            
        }
    }
?>