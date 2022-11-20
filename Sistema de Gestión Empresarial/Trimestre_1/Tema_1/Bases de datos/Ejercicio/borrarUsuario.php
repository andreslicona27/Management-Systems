<?php 
    $conexion = mysqli_connect('localhost', 'root');
    mysqli_select_db($conexion, 'usuariosdb');

    if (isset($_GET['id'])) {
        $query = "DELETE FROM usuarios WHERE ID={$_GET['id']}";
        mysqli_query($conexion, $query);

        print "<p>El usuario ha sido borrado exitosamente</p>";
        
    } else  {
        print "<p>No se a podido borrar al ususario</p>" . mysqli_error($conexion);
    }

    mysqli_close($conexion);
?>