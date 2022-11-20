<?php 
    
    class Persona { // ? si no ponemos nada entonces se considera publica
        private $nombre;
        private $apellidos;
        private $edad;
        private static $saludo = "Hola a todos";

        // CONSTRUCTORES
        public function __construct($nombre, $apellidos, $edad){
            $this->nombre = $nombre;
            $this->apellidos = $apellidos;
            $this->edad = $edad;
            // ? se ura "->" cuando querramos acceder a elementos de la clase caundo la funcion no es static
        }

        // SETTERS / GETTERS
        public function getNombre() {
            return $this->nombre;
        }

        public function setNombre($nombre) {
            $this->nombre = $nombre;
        }


        public function getApellidos() {
            return $this->apellidos;
        }

        public function setApellidos($apellidos) {
            $this->apellidos = $apellidos;
        }


        public function getEdad() {
            return $this->edad;
        }

        public function setEdad($edad) {
            $this->edad = $edad;
        }

        // FUNCTIONS
        public function mayorEdad() {
            return $this->edad >=18;
        }

        public function nombreCompleto() {
            print "El nombre es: ".$this->nombre." con apellidos ".$this->apellidos." con el siguiente saludo ".self::$saludo;
            // ? Para acceder a propiedades estaticas se hacer con el self:: o el nombre de la clase y ::
        }
    }

    $persona1 = new Persona("Pedro", "Aguirre Zapata", 34);

    if ($persona1->mayorEdad()) {
        print $persona1->nombreCompleto() . " es mayor de edad";
    } else {
        print $persona1->nombreCompleto() . " es menor de edad";
    }


?>