<!DOCTYPE html>
<html> 
    <head> 
        <meta http-equiv = "Content-Type" content = "text/html; charset=UTF-8">
        <link rel="stylesheet" type="text/css" href="estilo_mostrar.css"/>
        <title>Mostrar usuarios</title> 
    </head> 
    <body>
        <h1>Listado de usuarios</h1>
        <hr>
        <?php
        $dbc = mysqli_connect('localhost', 'root');
        mysqli_select_db($dbc, 'usuariosbd');
//Definir la consulta        
        $query = 'SELECT * FROM usuarios';
        if ($r = mysqli_query($dbc, $query)) {
//Ejecutamos la consulta             
//Recuperar y mostrar cada registro             
            while ($fila = mysqli_fetch_array($r)) {
                print "<strong>Nombre:</strong> ".$fila['Nombre']."<br>";
                print "<strong>Apellido:</strong> ".$fila['Apellido']."<br>";
                print "<strong>Correo:</strong> ".$fila['Email']."<br>";
                print "<br>";
                print "<a href = \"actualizar.php?id={$fila['id']}\">Editar </a> &nbsp;";
                print "<a href=\"borrar.php?id={$fila['id']}\">Borrar </a></p> \n";
                print "<hr>";
            }
        } else { //No se ha ejecutado la consulta             
            print '<p style="color:red;">No ha sido posible recuperar la entrada porque: <br/>' . mysqli_error($dbc) . '</p><p>El query que se estaba ejecutando era' . $query . '</p>';
        } mysqli_close($dbc);
        ?>
        <hr>
        </body>
</html> 