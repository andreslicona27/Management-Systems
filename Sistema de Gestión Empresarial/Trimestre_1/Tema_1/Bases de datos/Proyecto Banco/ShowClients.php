<!DOCTYPE html>
    <head>
        <title>Mostrar Clientes</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="ShowClient.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <header> 
            <h1>Datos de los Clientes</h1>
        </header>
        <div class="client">
                <?php 
                    $conexion = mysqli_connect('localhost', 'root');
                    mysqli_select_db($conexion, 'banco');
                    
                    $query = "SELECT * FROM clientes";
                    if ($clientes = mysqli_query($conexion, $query)){
                        if (empty($clientes)){
                            print ( "<p>No hay usuarios registrados</p>");
                        } else {
                            while ($fila = mysqli_fetch_array($clientes)) {

                                print "<div class=\"client-info-pic\">";
                                print "\t<div class=\"client-info\">";
                                print "\t\t<p>Nombre: ".$fila['Nombre']."</p>";
                                print "\t\t<p>Primer Apellido: ".$fila['Primer_Apellido']."</p>";
                                print "\t\t<p>Segundo Apellido: ".$fila['Segundo_Apellido']."</p>";
                                print "\t\t<p>DNI: ".$fila['dni']."</p>";
                                print "\t\t<p>Teléfono: ".$fila['Telefono']."</p>";
                                print "\t\t<p>Email: ".$fila['Email']."</p>";
                                print "\t\t<p>Dirección: ".$fila['Direccion']."</p>";
                                print "\t\t<p>Número de Cuenta: ".$fila['Numero_de_Cuenta']."</p>";
                                print "\t\t<p>Cantidad de Dinero: ".$fila['Cantidad_de_Dinero']."</p>";
                                print "\t</div>";
                                
                                print "\t<img src=\"avatars/avatar" .rand(1,9). ".png\" class=\"avatar\">";
                                print "</div>";

                                print "\t<div class=\"options-box\">";
                                print "\t\t<a href=\"UpdateClient.php?id={$fila['id']}\">Actualizar</a>";
                                print "\t\t<a href=\"DeleteClient.php?id={$fila['id']}\">Eliminar</a>";
                                print "\t\t<a href=\"Input.html?id={$fila['id']}\">Ingresar</a>";
                                print "\t\t<a href=\"Output.html?id={$fila['id']}\">Retirar</a>" . "</div>";
                                print "<div class=\"line\"></div>";
                            }
                        }

                    } else {
                        print "<p style = \"color:red;\">No se ha podido realizar la petición</p></br>" . mysqli_error($conexion);
                    } 
                    mysqli_close($conexion);
                ?>
        </div>
    </body>
</html>
