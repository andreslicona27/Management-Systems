<!DOCTYPE html>
    <head>
        <title>Ejercicio 2</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script type="text/javascript">
            
        </script>
    </head>
    <body>
        <h3>Rellena el formulario </h3>
        <form action="Ejercicio2Gestion.php" method="post">
            <p>Nombre:  <input type="text" name="nombre" size="20"/></p>
            <p>Email: <input type="text" name="email" size="20"/></p>
            <p>Teléfono: <input type="text" name="tel" size="20"/></p>
                        
            <p>Mensaje <textarea name="mensaje" rows="4" cols="40"></textarea></p>

            <input type="submit" name="enviar" value="Enviar Datos"/>
        </form>
    </body>
</html>