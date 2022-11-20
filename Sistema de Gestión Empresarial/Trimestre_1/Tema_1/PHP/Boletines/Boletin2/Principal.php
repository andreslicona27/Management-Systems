<!DOCTYPE html>
    <head>
        <title></title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php 
            include  'metodos.php';
        ?> 
    </head>
    <body>
        
        <?php 
            echo "Ejercicio 1 <br>";
            echo cadena();
            echo "<br>";

            echo "Ejercicio 2 <br>";
            $frase = "Hola como estas";
            $letra = "o";
            echo "La letra " . $letra . " se encuentra " . numVeces($frase, $letra) . " veces en la frase";
            echo "<br>";

            echo "Ejercicio 3 <br>";
            $contraseña = "contraseña";
            echo validar($contraseña);
            echo "</br>";

            echo "Ejercicio 4 <br>";
            echo numPares();
            echo "</br>";

            echo "Ejercicio 5 <br>";
            echo meses();
            echo "</br>";

            echo "Ejercicio 6 <br>";
            echo borrarDato();
            echo "</br>";

            echo "Ejercicio 7 <br>";
            echo matriz();
            echo "</br>";

            echo "Ejercicio 8 <br>";
            echo tablaCadenas();
            echo "</br>";

        ?>
    </body>
</html>