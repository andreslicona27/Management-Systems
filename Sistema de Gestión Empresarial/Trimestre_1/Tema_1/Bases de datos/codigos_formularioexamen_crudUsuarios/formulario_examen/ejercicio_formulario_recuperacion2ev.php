<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Pagina de subscripción</title>
    </head>
    <body>
        <h2>Formulario de subscripción a nuestras publicaciones:</h2><br>
        <form action="formulario2ev.php" method="post">
            <p>Nombre: <input type="text" name="nombre" size="15"/></p>
            <p>Primer Apellido: <input type="text" name="apellido1" size="15"/></p>
            <p>Segundo Apellido: <input type="text" name="apellido2" size="15"/></p>
            <p>Correo Electrónico:<input type="mail" name="correo" size="15"/></p><br>
            <p>¿Desea recibir información sobre las publicaciones?:<br>
                <input type="radio" name="info" value="si"/>Si,estoy interesado<br/>
                <input type="radio" name="info" value="no"/>No,gracias<br/> 
            </p> <br>  
            <p>Publicaciones disponibles: <br/>
                <input type="checkbox" value="National Geographic" name="publicaciones[]"/>National Geographic<br/>
                <input type="checkbox" value="Electronic Letters" name="publicaciones[]"/>Electronic Letters<br/>
                <input type="checkbox" value="Conocer" name="publicaciones[]"/>Conocer<br/>
                <input type="checkbox" value="Science" name="publicaciones[]"/>Science<br/>
                <input type="checkbox" value="Desarrollo Web" name="publicaciones[]"/>Desarrollo Web<br/>
            </p><br>
            <p>Formas de subscripción: <select name="subscripcion">
                    <option value="">-Elegir-</option>
                    <option value="semanal">Semanal</option>
                    <option value="mensual">Mensual</option>
                    <option value="anual">Anual</option>
                </select>
            </p><br>
            <input type="submit" name="formulario" value="Subscribirme"/>
        </form>
    </body>
</html>
