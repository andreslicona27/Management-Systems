<!DOCTYPE html>
    <head>
        <title>Ejemplo</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script type="text/javascript">
            
        </script>
    </head>
    <body>
        <form action="Principal_php.php" method="post">
        <p> Nombre: <select name="tratamiento">
            <option value="Sr.">Sr.</option>
            <option value="Sra.">Sra.</option>
            <option value="Srta.">Srta.</option>
        </select>

        <input type="text" name="nombre" size="20"/> </p>
        
        <p>Dirección de correo electrónico <input type="text" name="email" size="20"/></p>
        
        <p>Valoración</p>
        <input type="radio" name="respuesta" value="excelente"/>Excelente
        <input type="radio" name="respuesta" value="normal"/>Normal
        <input type="radio" name="respuesta" value="malo"/>Malo
        
        <p>Comentarios <textarea name="comentarios" rows="4" cols="40"></textarea></p>

        <input type="submit" name="enviar" value="Enviar mi respuesta"/>

        <input type="checkbox" name="opciones[]" value="valor1">valor1
        <input type="checkbox" name="opciones[]" value="valor2">valor2
        <input type="checkbox" name="opciones[]" value="valor3">valor3
        <input type="checkbox" name="opciones[]" value="valor4">valor4
        </form>
    </body>
</html>