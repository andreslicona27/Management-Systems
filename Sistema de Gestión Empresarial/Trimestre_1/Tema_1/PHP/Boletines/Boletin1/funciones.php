<?php
    // ? Ejercicio 1 
    function aleatorio(){
        $num = rand(1, 100);
        return $num;
    }

    // ? Ejercicio 2
    function sumar2($num1, $num2){
        $suma = $num1 + $num2;
        return $suma;
    }

    // ? Ejercicio 3
    function radio($radio) {
        $area = $radio*pi();
        return $area;
    }

    //? Ejercicio 4
    function imprimeNum() {
        $num = rand(1, 5);
        switch ($num) {
            case 1:
                return "uno";
            case 2:
                return "dos";
            case 3:
                return "tres";
            case 4:
                return "cuatro";
            case 5:
                return "cinco";
        }
    }

    //? Ejercicio 5
    function multiplo($num1, $num2){
        if($num1 % $num2 == 0) {
            return "Los numeros son multiplos entre si";
        } else {
            return "Los numeros no son multiplos entre si";
        }
    }

    //? Ejercicio 6
    function precio($edad){
        if( $edad < 8 || $edad > 66) {
            return "La entrada es gratis";

        } elseif(($edad >=9 && $edad < 16) || ($edad >=56 && $edad <= 65)) {
            return "La entrada cuesta 5 euros";

        } elseif($edad >= 17 && $edad <= 25){
            return "La entrada cuesta 8 euros";

        } elseif($edad >= 26 && $edad <= 55){
            return "La entrada cuesta 10 euros";
            
        } 

    }

        //? Ejercicio 7
        function transporte($mascota){
            switch ($mascota) {
                case 'huron':
                case 'gato':
                    return "El precio es de 1 euro";

                case 'perro':
                    return "El precio es de 1.5 euros";

                case 'loro':
                    return "El precio es de 2 euros";

                default:
                    return "El animal no esta permitido";
            }

        }

        //? Ejercicio 8
        function bingo($edad){
            if($edad >= 75 && $edad <=80){
                $premio = $edad * 0.05;
                return "Has ganado " . $premio . " euros";
            } else {
                return "No has ganado nada";
            }
        }
        
        //? Ejercicio 9
        function parImpar($num){
            if ($num % 2 == 0){
                return "el numero es par";
            } else {
                return "el numero es impar";
            }
        }
    
        //? Ejercicio 10
        function serieFibonacci(){
            $fin = 10000;
            $fibonacci = [0,1];

            for ($i = 2; $i <= $fin; $i++){
                echo $fibonacci[] = $fibonacci[$i-1] + $fibonacci[$i - 2];
                echo "</br>";
            }
        }

        //? Ejercicio 11
        function tabla(){
            echo "<tabla>";

            echo "<tr>";
            for ($i = 1; $i <= 10; $i++) { 
	            for ($j = 1; $j <= 10; $j++) { 
		            //echo "<td>$j X $i =";
		            echo "<td> " . ($j *$i);
		            echo "</td>";
	            }
	        echo "</tr>";
            }
            echo "</tabla>";

        } 

        //? Ejercicio 12 
        function factorial($num){
            $factorial = 1;
            $cont = 1;
            do  {
                $factorial *= $cont;
                $cont++; 

            } while ($cont <= $num);
            return $factorial;
        }

?>