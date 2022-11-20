<?php 
    interface Vehiculo {
        // * Todos los metodos de una interfaz tiene que ser publicos 
        public function getTipo();
        public function getRuedas();
    }

    class Coche implements Vehiculo{
        public function getTipo() {
            print "Este es un coche";
        }

        public function getRuedas() {
            return 4;
        }
    }

    class Moto implements Vehiculo{
        public function getTipo() {
            print "Esta es una moto";
        }

        public function getRuedas() {
            return 2;
        }
    }

    $coche = new Coche;
    $coche->getTipo();
    print $coche->getRuedas();
    
    $moto = new Moto;
    $moto->getTipo();
    print $moto->getRuedas();
?>