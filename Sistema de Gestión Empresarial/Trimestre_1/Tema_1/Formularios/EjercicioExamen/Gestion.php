<?php 
    $flag = false;

    if(isset($_POST['nombre']) && !empty($_POST['nombre'])) {
        $nombre = $_POST['nombre'];
    } else {
        echo "Debes ingresar el campo de nombre";
        $flag = true;
    }

    if(isset($_POST['primerApellido']) && !empty($_POST['primerApellido'])) {
        $primerApellido = $_POST['primerApellido'];
    } else {
        echo "Debes ingresar el campo de primer apellido";
        $flag = true;
    }

    if(isset($_POST['segundoApellido']) && !empty($_POST['segundoApellido'])) {
        $segundoApellido = $_POST['segundoApellido'];
    } else {
        echo "Debes ingresar el campo de segundo apellido";
        $flag = true;
    }

    if(isset($_POST['email']) && !empty($_POST['email'])) {
        $email = $_POST['email'];
    } else {
        echo "Debes ingresar un correo electrónico";
        $flag = true;
    }

    if(isset($_POST['publicidad']) && !empty($_POST['publicidad'])) {
        $publicidad = $_POST['publicidad'];
    } else {
        echo "Marca si deseas publicidad";
        $flag = true;
    }

   
    $revistas = $_POST['revistas[]'];

    if(isset($_POST['formas']) && !empty($_POST['formas'])) {
        $formas = $_POST['formas'];
    } else {
        echo "Elige el tipo de subscripcion";
        $flag = true;
    }

    $tarifa = 0 ;

    if (!$flag){
        echo "<h3>Datos del subscriptor</h3>";
        echo "<p>Nombre: $nombre</p>";
        echo "<p>Primer Apellido: $primerApellido</p>";
        echo "<p>Segundo Apellido: $segundoApellido</p>";
    }

    if ($_POST['formas' == "semanal"]){
        if($revistas == 1){
            $tarifa = 6;
        } else if ($revistas == 2){
            $tarifa = 10;
        } else if ($revistas == 3){
            $tarifa = 15;
        } else {
            $terifa = 22;
        }
    }

    if ($_POST['formas' == "mensual"]){
        if($revistas == 1){
            $tarifa = 24;
        } else if ($revistas == 2){
            $tarifa = 40;
        } else if ($revistas == 3){
            $tarifa = 60;
        } else {
            $terifa = 88;
        }
    }

    if ($_POST['formas' == "anual"]){
        if($revistas == 1){
            $tarifa = 150;
        } else if ($revistas == 2){
            $tarifa = 250;
        } else if ($revistas == 3){
            $tarifa = 300;
        } else {
            $terifa = 450;
        }
    }

    if (!$flag && $publicidad == 'si') {
        echo "<p>Le enviaremos información relacionada con nuestras publicaciones al correo $email</p>";

        echo "<h3>Datos de la subscripción</h3>";
        echo "<p>Señor/a $primerApellido. Estas son las publicaciones a las que se ha suscrito:</p>";
        foreach ($revistas as $opcion) {
            echo implode($opcion) . "</br>";
        } 

        echo "<p>Su tarifa $formas es de $tarifa euros</p>";

    } else {
        echo "Ha ocurrido un error";
        echo "<a href=\"Principal.php\">Volver a Intentarlo</a>";
    }
    
?>