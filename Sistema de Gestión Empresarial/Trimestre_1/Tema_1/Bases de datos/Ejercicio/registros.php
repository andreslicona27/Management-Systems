<?php 
    // ! siempre son las dos primeras lineas que necesitamos al usar una base de datos
    // !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
    $conexion = mysqli_connect('localhost', 'root');
    mysqli_select_db($conexion, 'usuariosdb');
    // !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!

    $problema = false;
    if(!empty($_POST['nombre']) &&!empty($_POST['apellidos']) && !empty($_POST['email'])){
        $nombre = trim($_POST['nombre']);
        $apellidos = trim($_POST['apellidos']);
        $email = trim($_POST['email']);
        
        // CONTROL DE USUARIO REGISTRADO 
        // para saber si un usuario ya existe antes de agregarlo
        $query = "SELECT * FROM usuarios";
        if ($registros = mysqli_query($conexion, $query)){
            if (empty($registros)){
                print ( "<p>No hay usuarios registrados</p>");
            } else {
                // ? Mientras haya una fila en el array haz el bucle
                while ($fila = mysqli_fetch_array($registros)) {
                    if ($fila['Nombre'] == $nombre && $fila['Apellidos'] == $apellidos){
                        print "<p>Ya exsiste un usuario con este nombre y apellidos</p>";
                        $problema = true;
                        break;
                    } else if ($fila['Email'] == $email){
                        print "<p>Ya exsiste un usuario con este correo</p>";
                        $problema = true;
                    }
                }
            }
        } else {
            print "<p style = \"color:red;\">No se ha podido realizar la petición</p></br>" . mysqli_error($conexion);
        }
    } else {
        print "<p style = \"color:red;\">Debe introducir un nombre, un apellido y un correo</p>";
        $problema = true;
    }


    if (!$problema) {
        $peticion = "INSERT INTO usuarios (ID, Nombre, Apellidos,Email) VALUES(0, '$nombre', '
        $apellidos', '$email')";
        if (mysqli_query($conexion, $peticion)){
            print "<p>Usuario registrado</p>";
        } else {
            print "<p style = \"color:red;\">No se ha podido hacer el registro</p></br>" . mysqli_error($conexion);
        }
    }

    //! para cerrar la conexion, siempre hay que hacer esto al final del archivo 
    mysqli_close($conexion);
?>