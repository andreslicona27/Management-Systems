<?php 
    $conexion = mysqli_connect('localhost', 'root');
    mysqli_select_db($conexion, 'catalogojuguetes');

    $problema = false;
    if(!empty($_POST['nombre']) && !empty($_POST['precio']) && !empty($_POST['imagen'] && !empty($_POST['descripcion']) && !empty($_POST['stock']))){
        $nombre = trim($_POST['nombre']);
        $precio = trim($_POST['precio']);
        $imagen = trim($_POST['imagen']);
        $descripcion = trim($_POST['descripcion']);
        $stock = trim($_POST['stock']);
        
        $query = "SELECT * FROM juguetes";
      
    } else {
        print "<p style = \"color:red;\">Debe introducir todos los datos que se le solicitan</p>";
        $problema = true;
    }

    if (!$problema) {
        $peticion = "INSERT INTO juguetes (id,nombre,precio,imagen,descripcion,stock) VALUES (0,'$nombre', '$precio', '$imagen' '$descripcion', '$stock')";
        if (mysqli_query($conexion, $peticion)){
            print "<p>Juguete registrado</p>";
        } else {
            print "<p style = \"color:red;\">No se ha podido hacer el registro</p></br>" . mysqli_error($conexion);
        }
    }
    
    print "<pre>". $peticion;
    // exit;
    mysqli_close($conexion);
?>