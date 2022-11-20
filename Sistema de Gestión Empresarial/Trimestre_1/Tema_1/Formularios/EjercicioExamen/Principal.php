<!DOCTYPE html>
    <head>
        <title>Ejercicio de Examen</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
    </head>
    <body>
        <form action="Gestion.php" method="post">
            <h3>Formulario de subscripción a nuestras publicaciones</h3>
            <p>Nombre: <input type="text" name="nombre" size="15"></p>
            <p>Primer Apellido: <input type="text" name="primerApellido" size="15"></p>
            <p>Segundo Apellido: <input type="text" name="segundoApellido" size="15"></p>
            <p>Correo Electrónico: <input type="email" name="email" size="15"></p>

            </br><p>¿Deseas recibir información sobre las publicaciones?</p>
            <p><input type="radio" name="publicidad" value="si">Si, estoy interesado</p>
            <p><input type="radio" name="publicidad" value="no">No, gracias</p>

            </br><p>Publicaciones disponibles</p>
            <input type="checkbox" name="revistas[]" value="national geographic">National Geographic</br>
            <input type="checkbox" name="revistas[]" value="electronic letters">Electronic Letters</br>
            <input type="checkbox" name="revistas[]" value="conocer">Conocer</br>
            <input type="checkbox" name="revistas[]" value="science">Science</br>
            <input type="checkbox" name="revistas[]" value="desarrollo web">Desarrollo Web</br>

            </br><p> Formas de subscripción <select name="formas">
                <option value="" selected disable hidden> -Elegir- </option>
                <option value="semanal"> Semanal </option>
                <option value="mensual"> Mensual </option>
                <option value="anual"> Anual </option>
            </select></p>

            <input type="submit" name="enviar" value="Subscribirme">
        </form>
    </body>
</html>