<?php 
    $conexion = mysqli_connect('localhost', 'root');
    mysqli_select_db($conexion, 'banco');

    $problema = false;
    if(!empty($_POST['numCuenta']) && !empty($_POST['dineroCuenta'])) {
        $numeroDeCuenta = intval(trim($_POST['numCuenta']));
        $cantidadDeDinero = floatval(trim($_POST['dineroCuenta']));
        
        $query = "SELECT 'Numero_De_Cuenta' FROM clientes";
        if ($registros = mysqli_query($conexion, $query)){
            if (empty($registros)){
                print "<div class=\"login-box\">";
                print "<div class=\"user-box\">";
                print "<p>No existe un usuario con ese número de cuenta</p>";
                print "</div>";
                print "<div class=\"button-form\">";
                print "\t\t<a href=\"ShowClients.php\">Volver</a>";
                print "</div>";
                print "</div>";
            }
        } else {
            
            print "<div class=\"login-box\">";
            print "<div class=\"user-box\">";
            print "<p style = \"color:red;\">No se ha podido realizar la petición</p></br>" . mysqli_error($conexion);
            print "</div>";
            print "<div class=\"button-form\">";
            print "\t\t<a href=\"ShowClients.php\">Volver</a>";
            print "</div>";
            print "</div>";
        }
    } else {
        print "<p style = \"color:red;\">Debe introducir todos los datos que se le solicitan</p>";
        $problema = true;
    }
    
    
    if (!$problema) {
        $peticion = "UPDATE clientes SET 'Cantidad_De_Dinero' = 'Cantidad_De_Dinero' - '$cantidadDeDinero' WHERE 'Numero_De_Cuenta' = $numeroDeCuenta'";
        if (mysqli_query($conexion, $peticion)){
            print "<p>El retiro se ha hecho sin problemas</p>";
        }   else {
            print "<p style = \"color:red;\">No se ha podido realizar el retiro</p></br>" . mysqli_error($conexion);
        }
    }

    mysqli_close($conexion);    
?>