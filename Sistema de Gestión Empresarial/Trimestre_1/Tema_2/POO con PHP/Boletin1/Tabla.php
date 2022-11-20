<?php 
    class Tabla {
        public $tabla = array(array());
        public $filas;
        public $columnas;

        // CONSTRUCTORES
        public function __construct($filas, $columnas){
            $this->filas = $filas;
            $this->columnas = $columnas;
        }

        // FUNCIONES
        public function cargarDato($dato, $fila, $columna){
            $this->tabla[$fila][$columna] = $dato;
        }

        public function mostrarTabla() {
            echo "<table border='1'>";

            foreach($this->tabla as $fila){
                echo "<tr> </tr>";

                foreach($fila as $dato){
                    echo "<tr>";
                    echo "<td>" . $dato . "</td>";
                    echo "</tr";
                }
            }
            echo "</table>";
        }
    }

    $tabla = new Tabla(4,4);
    $tabla->cargarDato("h", 0, 0);
    $tabla->cargarDato("o", 1, 0);
    $tabla->cargarDato("l", 0, 1);
    $tabla->cargarDato("a", 1, 1);
    $tabla->cargarDato("c", 2, 1);
    $tabla->cargarDato("o", 2, 2);
    $tabla->cargarDato("m", 1, 2);
    $tabla->cargarDato("o", 0, 2);
    $tabla->cargarDato("5", 0, 2);

    $tabla->mostrarTabla();
?>