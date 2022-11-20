<?php 
    abstract class Operacion {
        protected $valor1;
        protected $valor2;
        protected $resultado;

        public function cargar1($dato){
            $this->valor1 = $dato;
        }

        public function cargar2($dato){
            $this->valor2 = $dato;
        }

        public function mostrar_resultado(){
            print "El resultado de la operacion es: ".$this->resultado;
        }

        abstract public function operar();
    }
    
    // * DEFINIMOS LAS CLASES HIJAS
    class Suma extends Operacion{
        public function operar() {
            $this->resultado = $this->valor1 + $this->valor2;
        }
    }

    class Resta extends Operacion{
        public function operar() {
            $this->resultado = $this->valor1 - $this->valor2;
        }
    }

    $suma = new Suma;
    $suma->cargar1(10);
    $suma->cargar2(15);
    $suma->operar();
    $suma->mostrar_resultado();

    $resta = new Resta;
    $resta->cargar1(30);
    $resta->cargar2(15);
    $resta->operar();
    $resta->mostrar_resultado();

?>