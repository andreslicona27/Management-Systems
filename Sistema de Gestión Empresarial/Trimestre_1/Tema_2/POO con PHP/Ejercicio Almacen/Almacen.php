<?php 
    class Almacen{
        private $estanteria = [];

        // BUILDER  
        public function __construct($filas, $columnas) {
            for ($i = 0; $i < $filas; $i++) {
                for ($j = 0; $j < $columnas; $j++) {
                    $this->estanteria[$i][$j] = 0;
                }
            }
        }

        // FUNCTIONS 
        public function precio_bebidas($filas, $columnas){
            $precioTotal = 0;
            for ($i = 0; $i < count($this->estanteria); $i++) {
                for ($j = 0; $j < count($this->estanteria[$i]); $j++) {
                    if (is_object($this->estanteria[$i][$j])) {
                        if ($this->estanteria[$i][$j]->getPrecio() != 0) {
                            $precioTotal += $this->estanteria[$i][$j]->getPrecio(); //acumulo el precio
                        }
                    }
                }
            }
            return $precioTotal;
        }

        public function preico_marca($marca){
            $precioTotal = 0;
            for ($i = 0; $i < count($this->estanteria); $i++) {
                for ($j = 0; $j < count($this->estanteria[$i]); $j++) {
                    if (is_object($this->estanteria[$i][$j])) {
                        if ($this->estanteria[$i][$j]->getMarca() == $marca) {
                            $precioTotal += $this->estanteria[$i][$j]->getPrecio(); //acumulo el precio
                        }
                    }
                }
            }
            if ($precioTotal == 0) {
                print 'No existen productos en el almacen de la marca ' . $marca . '<br>';
            }
            return $precioTotal;
        }

        public function precio_estanteria($num){
            $precioTotal = 0;
            for ($i = 0; $i < count($this->estanteria); $i++) {
                if ($num >= count($this->estanteria)) {
                    print ('No existe la estantería indicada <br>');
                } else {
                    if (is_object($this->estanteria[$i][$num])) {
                        $precioTotal += $this->estanteria[$i][$num]->getPrecio();
                    }
                }
            }
            return $precioTotal;
        }

        public function agregar_producto($bebida){
            $i = 0;
            $j = 0;
            $encontrado = 0;
            //count($this->estanteria) devuelve el numero de filas
            while (($i < count($this->estanteria))and ( $encontrado == 0)) {
                $j = 0;
                while (($j < count($this->estanteria[$i]))and ( $encontrado == 0)) {
                    if (!is_object($this->estanteria[$i][$j])) {
                        print('Hay sitio para la bebida <br>');

                        $this->estanteria[$i][$j] = $bebida;
                        $encontrado = 1;
                    }
                $j++;
                }
                $i++;
            }
            if ($encontrado == 0) {
                print('No hay sitio para la bebida <br>');
            }
        }

        public function eliminar_producto($identificador){
            for ($i = 0; $i < count($this->estanteria); $i++) {
                for ($j = 0; $j < count($this->estanteria[$i]); $j++) {
                    if (is_object($this->estanteria[$i][$j])) {
                    if ($this->estanteria[$i][$j]->getId() == $identificador) {
                        $this->estanteria[$i][$j] = 0;
                        print 'Producto borrado <br>';
                    }
                    } else {
                        print 'Producto no encontrado <br> ';
                    }
                }
            }
        }

        public function mostrar_informacion(){
            for ($i = 0; $i < count($this->estanteria); $i++) {
                for ($j = 0; $j < count($this->estanteria[$i]); $j++) {
                    if (!empty($this->estanteria[$i][$j])) {
                        $this->estanteria[$i][$j]->visualizar();
                    } else {
                        print'Falta producto <br>';
                    }
                }
            }
        }

    }
?>