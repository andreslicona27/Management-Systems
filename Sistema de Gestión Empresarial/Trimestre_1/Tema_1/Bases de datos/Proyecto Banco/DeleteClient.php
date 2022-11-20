<!DOCTYPE html>
    <head>
        <title>borrar</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="DeleteClient.css">
        
    </head>
    <body>

        <?php 
            $conexion = mysqli_connect('localhost', 'root');
            mysqli_select_db($conexion, 'banco');

            if (isset($_GET['id'])) {
                $query = "DELETE FROM clientes WHERE id={$_GET['id']}";
                mysqli_query($conexion, $query);

                print "<div class=\"login-box\">";
                print "<div class=\"user-box\">";
                print "<p>El usuairo ha sido borrado</p>";
                print "</div>";
                print "<div class=\"button-form\">";
                print "\t\t<a href=\"ShowClients.php\">Volver</a>";
                print "</div>";
                print "</div>";

            } else  {
                print "<div class=\"login-box\">";
                print "<div class=\"user-box\">";
                print "<p>No se ha podido borrar el usuario</p>". mysqli_error($conexion);
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
