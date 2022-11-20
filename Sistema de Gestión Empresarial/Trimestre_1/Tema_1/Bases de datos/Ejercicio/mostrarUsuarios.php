<?php 
    $conexion = mysqli_connect('localhost', 'root');
    mysqli_select_db($conexion, 'usuariosdb');

    $query = "SELECT * FROM usuarios";
    print "<h1>Datos de los Usuarios</h1>";
    if ($usuarios = mysqli_query($conexion, $query)){
        if (empty($usuarios)){
            print ( "<p>No hay usuarios registrados</p>");
        } else {
            while ($fila = mysqli_fetch_array($usuarios)) {
                print "Nombre: ".$fila['Nombre']."<br>";
                print "Apellidos: ".$fila['Apellidos']."<br>";
                print "Email: ".$fila['Email']."<br>";
                print "<a href=\"actualizarUsuario.php?id={$fila['ID']}\">Actualizar</a>"."<br>";
                print "<a href=\"borrarUsuario.php?id={$fila['ID']}\">Borrar</a>"."<br>";
                print "<hr>";
            }
        }
    } else {
        print "<p style = \"color:red;\">No se ha podido realizar la petición</p></br>" . mysqli_error($conexion);
    }

    mysqli_close($conexion);
?>