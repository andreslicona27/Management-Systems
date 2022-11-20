<?php 
    class CabeceraCtor {
        private $titulo;
        private $posicion;

        // CONSTRUCTORES
        public function __construct($titulo, $posicion){
            $this->titulo = $titulo;
            $this->posicion = $posicion;
        }

       
        // FUNCIONES 
        public function mostrar(){
            if($this->posicion == "centrado") {
                print "<h1 style=\"text-align:center\">".$this->titulo."</h1>";
            } else if ($this->posicion == "derecha") {
                print "<h1 style=\"text-align:right\">".$this->titulo."</h1>";
            } else {
                print "<h1 style=\"text-align:left\">".$this->titulo."</h1>";
            }
        }
    }

    $CabeceraCtor = new CabeceraCtor("Hola Mundo", "centrado");
    $CabeceraCtor->mostrar();


?>