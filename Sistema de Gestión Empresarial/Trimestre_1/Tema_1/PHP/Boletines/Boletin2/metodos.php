<?php 
    // ? Ejercicio 1
    function cadena() {
        $cadena = "abordaje";
        $cadena = str_replace("bord", "lmir", $cadena);

        return $cadena;
    }

    // ? Ejercicio 2
    function numVeces($frase, $letra){
        $contador = 0;
        for ($i=0; $i < strlen($frase); $i++) { 
            if ($frase[$i] === $letra){
                $contador++;
            }
        }
        return $contador;
    }

    // ? Ejercicio 3
    function validar($contraseña) {
        $todoBien = false;
        if(strlen($contraseña) >= 8 && strlen($contraseña) <=12){
            if(is_numeric($contraseña[0])){
                echo "La contraseña no puede empezar por un numero";
            } else {
                echo "Contraseña aprobada";
                $todobien = true;
            }

        } else {
            echo "La contrseña debe tener entre 8-12 caracteres";
        }

        // ? Ejercicio 4 
        function numPares(){
            $numeros = array();

            for ($i = 0; $i < 20; $i++){
                if ( $i % 2 == 0){
                    array_push($numeros, $i);
                    echo $i . "</br>";
                }
            }
        }

        // ? Ejercicio 5
        function meses(){
            $meses=array('enero','febrero','marzo','abril', 'mayo','junio', 'julio','agosto', 'septiembre', 'octubre', 'noviemnbre', 'diciembre');   
            $mesesM = array();

            for ($i = 0; $i < sizeof($meses); $i++) {
                if(substr($meses[$i],0,1) == 'm'){
                    array_push($mesesM, $meses[$i]);
                }
            }
            foreach ($mesesM as $mes) {
                echo $mes . "</br>";
            }
        }

        // ? Ejercicio 6
        function borrarDato() {
            $colores = array('rojo', 'verde', 'amarillo', 'azul','rosa');

            $clase = array_search("azul", $colores);
            unset($colores[$clase]);

            foreach ($colores as $color) {
                echo $color . "</br>";
            }
        }

        // ? Ejercicio 7
        function matriz(){
            $zoo = array(
                array("Perro", "León", "Cocodrilo"), 
                array("Gato", "Pantera", "Caimán"));
            
            echo $zoo[1][1];

        }

        // ? Ejercicio 8
        function tablaCadenas(){
            $nombres = array("Carlos Álvarez", "Laura López", "Rosa Márquez", "Jorge Tiras");
            $materias = array("Lengua", "Historia", "Inglés", "Matemáticas");
           
            echo "<table border='1'>";
            echo "<tr><td></td>";

            for ($j = 0; $j <= sizeOf($materias) - 1; $j++) { 
                echo "<th>" . $materias[$j] . "</th>";
            }
                echo "</tr>";
            for ($j = 0; $j <= sizeOf($nombres) - 1; $j++) { 
                echo "<tr>";
                echo "<th>" . $nombres[$j] . "</th>";
                echo "<td>" . rand(0,10) . "</td>";
                echo "<td>" . rand(0,10) . "</td>";
                echo "<td>" . rand(0,10) . "</td>";
                echo "<td>" . rand(0,10) . "</td>";
                echo "</tr>";
            }
            echo "</table>";

        }

    }
?>