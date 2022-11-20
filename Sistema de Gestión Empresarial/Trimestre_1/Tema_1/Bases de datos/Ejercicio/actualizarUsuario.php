<?php 
    $conexion = mysqli_connect('localhost', 'root');
    mysqli_select_db($conexion, 'usuariosdb');

    // COMPROACION DE SI EXISTE EL ID
    if(isset($_GET['id'])){
        $query = "SELECT Nombre, Apellidos, Email FROM usuarios WHERE ID={$_GET['id']}";
        if($registro = mysqli_query($conexion, $query)){
            // ? Datos del usuario con este id
            $fila = mysqli_fetch_array($registro);

            print "<form action=\"actualizarUsuario.php\" method=\"post\">";
            print "<input type=\"text\" name=\"nombre\" value=".$fila['Nombre']."><br>";
            print "<input type=\"text\" name=\"apellidos\" value=".$fila['Apellidos']."><br>";
            print "<input type=\"mail\" name=\"email\" value=".$fila['Email']."><br>";
            print "<input type=\"hidden\" name=\"id\" value=".$_GET['id']."/><br>";
            print "<input type=\"submit\" name=\"submit\" value=\"Actualizar\"/><br>";
            print "</form>";
        } else {
            print "<p style = \"color:red;\">No se ha podido realizar la petición</p></br>" . mysqli_error($conexion);
        }
    } else if (isset($_POST['id'])){
        $problema = false;
        if(!empty($_POST['nombre']) && !empty($_POST['apellidos']) && !empty($_POST['email'])){
            $nombre = mysqli_real_escape_string($conexion,trim($_POST['nombre']));
            $apellidos = mysqli_real_escape_string($conexion,trim($_POST['apellidos']));
            $email = mysqli_real_escape_string($conexion,trim($_POST['email']));
        } else {
            $problema = true;
            print "<p style = \"color:red;\">Los campos no pueden estar vacios</p></br>";
        }

        if (!$problema) {
            $query = "UPDATE usuarios SET Nombre='$nombre', Apellidos='$apellidos', Email='$email' WHERE ID={$_POST['id']}";
            $registro = mysqli_query($conexion, $query);

            if(mysqli_affected_rows($conexion) == 1){
                print "<p>Se ha actulizado el usuario</p>";
            } else {
                print "<p style = \"color:red;\">No se ha podido realizar la actulización.</p></br>" . mysqli_error($conexion);
            }
        }
    } else{
        print "<p>No se han recibido datos del formulario</p>";
    }

    mysqli_close($conexion);
?>