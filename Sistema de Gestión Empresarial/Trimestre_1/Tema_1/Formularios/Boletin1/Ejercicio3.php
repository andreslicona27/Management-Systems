<!DOCTYPE html>
    <head>
        <title>Ejercicio 3</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script type="text/javascript">
            
        </script>
    </head>
    <body>
        <h3>Rellene los siguientes datos</h3>
        <form action="Ejercicio3Gestion.php" method="post">
            <p>Nombre:  <input type="text" name="nombre" size="20"/></p>
            <p>Apellidos:  <input type="text" name="apellidos" size="20"/></p>
            <p>Email: <input type="text" name="email" size="20"/></p>
            <p>Contraseña: <input type="password" name="contraseña" size="20"/></p>

            <p> sexo: <select name="sexo">
                <option value="hombre">Hombre</option>
                <option value="mujer">Mujer</option>
            </select>
        
            <p>Interesado en los siguientes temas</p>
            <p><input type="checkbox" name="opciones[]" value="musica"/>Música</p>
            <p><input type="checkbox" name="opciones[]" value="deportes"/>Deportes</p>
            <p><input type="checkbox" name="opciones[]" value="cine"/>Cine</p>
            <p><input type="checkbox" name="opciones[]" value="libros"/>Libros</p>
            <p><input type="checkbox" name="opciones[]" value="ciencia"/>Ciencia</p>

            <input type="submit" name="enviar" value="Enviar formulario"/>
            <input type="button" name="borrar" value="Borrar"/>
        </form>
    </body>
</html>