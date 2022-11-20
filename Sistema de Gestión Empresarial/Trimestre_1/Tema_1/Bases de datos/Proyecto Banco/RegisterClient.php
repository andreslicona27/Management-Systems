<?php 
    $conexion = mysqli_connect('localhost', 'root');
    mysqli_select_db($conexion, 'banco');

    $problema = false;
    if(!empty($_POST['nombre']) && !empty($_POST['primerApellido']) && !empty($_POST['segundoApellido'] && !empty($_POST['dni']) && !empty($_POST['telefono']) && !empty($_POST['email']) && !empty($_POST['direccion']) && !empty($_POST['numCuenta']) && !empty($_POST['dineroCuenta']))){
        $nombre = trim($_POST['nombre']);
        $primerApellido = trim($_POST['primerApellido']);
        $segundoApellido = trim($_POST['segundoApellido']);
        $dni = trim($_POST['dni']);
        $telefono = trim($_POST['telefono']);
        $email = trim($_POST['email']);
        $direccion = trim($_POST['direccion']);
        $numeroDeCuenta = intval(trim($_POST['numCuenta']));
        $cantidadDeDinero = floatval(trim($_POST['dineroCuenta']));
        
        $query = "SELECT * FROM clientes";
        if ($registros = mysqli_query($conexion, $query)){
            if (mysqli_num_rows($registros)==0){
                print ( "<p>No hay usuarios registrados</p>");
            } else {
                while ($fila = mysqli_fetch_array($registros)) {
                    if ($fila['Numero_de_Cuenta'] == $numeroDeCuenta){
                        print "<p>Ya exsiste un usuario con este numero de cuenta</p>";
                        $problema = true;
                        break;
                    } 
                }
            }
        } else {
            print "<p style = \"color:red;\">No se ha podido realizar la petición</p></br>" . mysqli_error($conexion);
        }
    } else {
        print "<p style = \"color:red;\">Debe introducir todos los datos que se le solicitan</p>";
        $problema = true;
    }


    if (!$problema) {
        $peticion = "INSERT INTO clientes (id,Nombre,Primer_Apellido,Segundo_Apellido,dni,Telefono,Email,Direccion,Numero_de_Cuenta,Cantidad_de_Dinero) VALUES (0,'$nombre', '$primerApellido', '$segundoApellido' '$dni', '$telefono', '$email', '$direccion', '$numeroDeCuenta', '$cantidadDeDinero')";
        if (mysqli_query($conexion, $peticion)){
            print "<p>Usuario registrado</p>";
        } else {
            print "<p style = \"color:red;\">No se ha podido hacer el registro</p></br>" . mysqli_error($conexion);
        }
    }
    
    // print "<pre>". $peticion;
    // exit;
    mysqli_close($conexion);
?>