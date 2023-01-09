<!DOCTYPE html>
    <head>
        <title>Catalogo De Juguetes</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../css/Muestra_Juguetes.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <header> 
            <h1>Los mejores juguetes que podrás encontrar</h1>
        </header>
        <div class="toy">
                <?php 
                    $conexion = mysqli_connect('localhost', 'root');
                    mysqli_select_db($conexion, 'catalogojuguetes');
                    
                    $query = "SELECT * FROM juguetes";
                    if ($toys = mysqli_query($conexion, $query)){
                        if (empty($toys)){
                            print ( "<p>No hay juguetes registrados</p>");
                        } else {
                            while ($fila = mysqli_fetch_array($toys)) {

                                print "<div class=\"toy-info-pic\">";
                                print "\t<div class=\"toy-info\">";
                                print "\t\t<p>".$fila['nombre']."</p>";
                                print "\t\t<p>".$fila['precio']." euros</p>";
                                print "\t\t<p> ".$fila['descripcion']."</p>";
                                print "\t\t<p>Stock: ".$fila['stock']."</p>";
                                print "\t</div>";
                                
                                print "\t<img src=\"".$fila['imagen']." class=\"image\">";
                                print "</div>";
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
