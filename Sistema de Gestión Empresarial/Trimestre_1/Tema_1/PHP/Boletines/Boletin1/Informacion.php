<!DOCTYPE html>
<html>
    <head>
        <title>Boletin 1</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible">
        <meta name="viewport"content="width=device-widthinitial-scale=10">
        <?php
            include 'funciones.php';
        ?>
    </head>
    <body>
        <?php 
            echo "Ejercicio 1 <br>";
            echo aleatorio();
            echo "<br>";

            echo "Ejercicio 2 <br>";
            echo sumar2(10,15);
            echo "<br>";

            echo "Ejercicio 3 <br>";
            echo "el area de 45 es: " . radio(45);
            echo "<br>";

            echo "Ejercicio 4 <br>";
            echo imprimeNum();
            echo "<br>";

            echo "Ejercicio 5 <br>";
            echo multiplo(10,5);
            echo "<br>";

            echo "Ejercicio 6 <br>";
            echo precio(5);
            echo "<br>";

            echo "Ejercicio 7 <br>";
            echo transporte('perro');
            echo "<br>";

            echo "Ejercicio 8 <br>";
            echo bingo(78);
            echo "<br>";

            echo "Ejercicio 9 <br>";
            echo parImpar(10);
            echo "<br>";

            echo "Ejercicio 10 <br>";
            //echo serieFibonacci();
            echo "<br>";

            echo "Ejercicio 11 <br>";
            echo "<tabla>";
            echo tabla();
            echo "</tabla>";
            echo "<br>";

            echo "Ejercicio 12 <br>";
            echo factorial(10);
            echo "<br>";

        ?>

    </body>
</html>