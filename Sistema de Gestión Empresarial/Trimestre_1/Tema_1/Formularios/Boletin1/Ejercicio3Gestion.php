<?php 
    error_reporting(E_ALL ^ E_NOTICE);
    $flag = false;
    if (isset($_POST['nombre']) && !empty($_POST['nombre'])){
        $nombre = $_POST['nombre'];
    } else {
        print "Agrega un nombre valido";
        $flag = true;
    }

    if (isset($_POST['apellidos']) && !empty($_POST['apellidos'])){
        $apellidos = $_POST['apellidos'];
    } else {
        print "Agrega apellidos validos";
        $flag = true;
    }

    if (isset($_POST['email']) && !empty($_POST['email'])){
        $email = $_POST['email'];
    } else {
        print "Agrega un email valido";
        $flag = true;
    }

    if (isset($_POST['contraseña']) && !empty($_POST['contraseña'])){
        $contraseña = $_POST['contraseña'];
    } else {
        print "Agrega una contraseña valida";
        $flag = true;
    }

    if (isset($_POST['sexo']) && !empty($_POST['sexo'])){
        $sexo = $_POST['sexo'];
    } else {
        print "Agrega un elemento valido";
        $flag = true;
    }

    $opciones[] = $_POST['opciones'];

    
    echo "<p>$nombre</p>";
    echo "<p>$apellidos</p>";
    echo "<p>$email</p>";
    echo "<p>$contraseña</p>";
    echo "<p>$sexo</p>";
    foreach ($opciones as $opcion){
        echo implode($opcion) + "</br>";
    }

    if ($flag == false) {
        echo "Tu solicitud ha sido admitida";
    }
?>