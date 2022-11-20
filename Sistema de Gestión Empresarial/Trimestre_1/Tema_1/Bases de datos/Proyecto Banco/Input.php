<!DOCTYPE html>
    <head>
        <title>Ingreso</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="Input.css">;
    </head>
    <body>
        <?php 
            $conexion = mysqli_connect('localhost', 'root');
            mysqli_select_db($conexion, 'banco');

            $problema = false;
            if(isset($_GET['id']) && !empty($_POST['dineroCuenta'])) {
                $cantidadDeDinero = floatval(trim($_POST['dineroCuenta']));
                
            } else {
                $problema = true;

                print "<div class=\"login-box\">";
                print "<div class=\"user-box\">";
                print "<input type=\"text\" name=\"numCuenta\" size=\"5\" value=\"" .$fila['Numero_de_Cuenta']."\"required>";

                print "<p>Ingrese la cantidad de dinero</p>";
                print "</div>";
                print "<div class=\"button-form\">";
                print "\t\t<a href=\"ShowClients.php\">Volver</a>";
                print "</div>";
                print "</div>";
            }
            
            
            if (!$problema) {
                $peticion = "UPDATE clientes SET 'Cantidad_De_Dinero'='$cantidadDeDinero' + 'Cantidad_De_Dinero' WHERE id={$_GET['id']}";
                if (mysqli_query($conexion, $peticion)){

                    print "<div class=\"login-box\">";
                    print "<div class=\"user-box\">";
                    print "<p>El ingreso se ha hecho sin problemas</p>";
                    print "</div>";
                    print "<div class=\"button-form\">";
                    print "\t\t<a href=\"ShowClients.php\">Volver</a>";
                    print "</div>";
                    print "</div>";
                } else {

                    print "<div class=\"login-box\">";
                    print "<div class=\"user-box\">";
                    print "<p>No se ha podido hacer el ingreso</p></br>" . mysqli_error($conexion);
                    print "</div>";
                    print "<div class=\"button-form\">";
                    print "\t\t<a href=\"ShowClients.php\">Volver</a>";
                    print "</div>";
                    print "</div>";
                }
            }

            mysqli_close($conexion);
        ?>
    </body>
</html>
