<?php 
   
    class CabeceraPagina {
        public $titulo;
        public $posicion;

        // FUNCTIONS 
        public function cargarOpcion($titulo, $posicion){
            $this->titulo = $titulo;
            $this->posicion = $posicion;
        }

        public function mostrar() {
            if($this->posicion == "centrado") {
                print "<h1 style=\"text-align:center\">".$this->titulo."</h1>";
            } else if ($this->posicion == "derecha") {
                print "<h1 style=\"text-align:right\">".$this->titulo."</h1>";
            } else {
                print "<h1 style=\"text-align:left\">".$this->titulo."</h1>";
            }
        }
        
    }

    $cabeceraPagina = new CabeceraPagina;
    $cabeceraPagina->cargarOpcion("hola mundo", "centrado");
    $cabeceraPagina->mostrar();

?>