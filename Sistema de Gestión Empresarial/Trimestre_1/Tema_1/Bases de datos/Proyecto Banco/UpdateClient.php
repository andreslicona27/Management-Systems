<!DOCTYPE html>
    <head>
        <title>Actualizar Cliente</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="UpdateClient.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <h1>Actualizar Cliente</h1>
            <?php 
                $conexion = mysqli_connect('localhost', 'root');
                mysqli_select_db($conexion, 'banco');

                if(isset($_GET['id'])){
                    $query = "SELECT * FROM clientes WHERE id={$_GET['id']}";
                    if($registro = mysqli_query($conexion, $query)){
                        $fila = mysqli_fetch_array($registro);
                        print "<div class=\"login-box\">";
                        print "<h2>Datos Personales</h2>";
                        print "<form action=\"UpdateClient.php\" method=\"post\">";
                            print "<div class=\"type-one\">";
                                print "<div class=\"user-box\">";
                                    print "<input type=\"text\" name=\"nombre\" size=\"15\" value=\"" . $fila['Nombre'] . "\"required>";
                                    print "<label>Nombre</label>";
                                print "</div>";
                                print "<div class=\"user-box\">";
                                    print "<input type=\"text\" name=\"primerApellido\" size=\"15\" value=\"" .$fila['Primer_Apellido']."\"required>";
                                    print "<label>Primer Apellido</label>";
                                print "</div>";
                                print "<div class=\"user-box\">";
                                    print "<input type=\"text\" name=\"segundoApellido\" size=\"15\" value=\"" .$fila['Segundo_Apellido']."\" required>";
                                    print "<label>Segundo Apellido</label>";
                                print "</div>";
                            print "</div>";
            
                            print "<div class=\"type-one\">";
                                print "<div class=\"user-box\">";
                                    print "<input type=\"text\" name=\"dni\" value=\"" .$fila['dni']."\"required>";
                                    print "<label>DNI</label>";
                                print "</div>";
                                print "<div class=\"user-box\">";
                                    print "<input type=\"text\" name=\"telefono\" value=\"" .$fila['Telefono']."\"required>";
                                    print "<label>Teléfono</label>";
                                print "</div>";
                                print "<div class=\"user-box\">";
                                    print "<input type=\"email\" name=\"email\" value=\"" .$fila['Email']."\"required>";
                                    print "<label>Correo</label>";
                                print "</div>";
                            print "</div>";
            
                            print "<div class=\"user-box\">";
                                print "<input type=\"text\" name=\"direccion\" value=\"" .$fila['Direccion']."\"required>";
                                print "<label>Dirección</label>";
                            print "</div>";
            
                            print "<h2>Datos Bancarios</h2>";
                            print "<div class=\"user-box\">";
                                print "<input type=\"text\" name=\"numCuenta\" size=\"5\" value=\"" .$fila['Numero_de_Cuenta']."\"required>";
                                print "<label>Número de Cuenta</label>";
                            print "</div>";
                            print "<div class=\"user-box\">";
                                print "<input type=\"text\" name=\"dineroCuenta\" value=\"" .$fila['Cantidad_de_Dinero']."\"required>";
                                print "<label>Cantidad de Dinero</label>";
                            print "</div>";
                            print "<div class=\"button-form\">";
                                print "<input type=\"submit\" id=\"submit\" value=\"Actualizar Cliente\">";
                            print "</div>";
                        print "</form>";
                    print "</div>";
                    } else {
                        print "<div class=\"login-box\">";
                        print "<div class=\"user-box\">";
                        print "<p>No se ha podido realizar la petición</p></br>" . mysqli_error($conexion);
                        print "</div>";
                        print "<div class=\"button-form\">";
                        print "\t\t<a href=\"ShowClients.php\">Volver</a>";
                        print "</div>";
                        print "</div>";
                    }
                } else if (isset($_POST['id'])){
                    $problema = false;
                    if(!empty($_POST['nombre']) && !empty($_POST['apellidos']) && !empty($_POST['email'])){
                        $nombre = mysqli_real_escape_string($conexion,trim($_POST['nombre']));
                        $primerApellido = mysqli_real_escape_string($conexion,trim($_POST['Primer_Apellido']));
                        $segundoApellido = mysqli_real_escape_string($conexion,trim($_POST['Segundo_Apellido']));
                        $dni = mysqli_real_escape_string($conexion,trim($_POST['dni']));
                        $telefono = mysqli_real_escape_string($conexion,trim($_POST['Telefono']));
                        $email = mysqli_real_escape_string($conexion,trim($_POST['email']));
                        $numCuenta = mysqli_real_escape_string($conexion,trim($_POST['Numero_De_Cuenta']));
                        $dineroCuenta = mysqli_real_escape_string($conexion,trim($_POST['Dinero_De_Cuenta']));
                    } else {
                        $problema = true;
                        print "<div class=\"login-box\">";
                        print "<div class=\"user-box\">";
                        print "<p>Los campos no pueden estar vacios</p></br>";
                        print "</div>";
                        print "<div class=\"button-form\">";
                        print "\t\t<a href=\"ShowClients.php\">Volver</a>";
                        print "</div>";
                        print "</div>";
                    }

                    if (!$problema) {
                        $query = "UPDATE usuarios SET Nombre='$nombre', Primer_Apellido='$primerApellido', Segundo_Apellido='$segundoApellido', 'dni'='$dni', 'Telefono'='$telefono',Email='$email', 'Direccion'='$direccion', 'Numero_De_Cuenta'='$numCuenta', 'Dinero_De_Cuenta'='$dineroCuenta' WHERE id={$_POST['id']}";
                        $registro = mysqli_query($conexion, $query);

                        if(mysqli_affected_rows($conexion) == 1){
                            print "<div class=\"login-box\">";
                            print "<div class=\"user-box\">";
                            print "<p>Se ha actulizado el usuario</p>";
                            print "</div>";
                            print "<div class=\"button-form\">";
                            print "\t\t<a href=\"ShowClients.php\">Volver</a>";
                            print "</div>";
                            print "</div>";
                        } else {
                            print "<div class=\"login-box\">";
                            print "<div class=\"user-box\">";
                            print "<p style = \"color:red;\">No se ha podido realizar la actulización.</p></br>" . mysqli_error($conexion);
                            print "</div>";
                            print "<div class=\"button-form\">";
                            print "\t\t<a href=\"ShowClients.php\">Volver</a>";
                            print "</div>";
                            print "</div>";
                        }
                    }
                } else{
                    print "<div class=\"login-box\">";
                    print "<div class=\"user-box\">";
                    print "<p>No se han recibido datos del formulario</p>";
                    print "</div>";
                    print "<div class=\"button-form\">";
                    print "\t\t<a href=\"ShowClients.php\">Volver</a>";
                    print "</div>";
                    print "</div>";
                }

                mysqli_close($conexion);
            ?>
        
    </body>
</html>
