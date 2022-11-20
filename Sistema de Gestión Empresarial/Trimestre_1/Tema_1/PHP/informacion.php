<<!DOCTYPE html>
    <head>
        <title></title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script type="text/javascript">
            
        </script>
        <?php
            include 'funciones.php';
        ?>
    </head>
    <body>
        <?php
            $suma = sumar(3,4); //? el dolar se pone cuando creas o usas una variable 
            $resta = restar(3,4);
            $multiplicar = multiplicar(3,4);
            $dividir = dividir(3,4);

            echo "la suma es: $suma" ;
            echo "la resta es:  $resta";
            echo "la multiplicacion es: " . $multiplicar;
            echo "la division quar: " . $dividir;  //? El punto es el simbolo de concatenacion del lenguaje 

        ?>
    </body>
</html>