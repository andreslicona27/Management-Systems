<?php 
    $flag = false;
    $fecha = date('d-m-Y');

    if (isset($_POST['nombre']) && !empty($_POST['nombre'])){
         $nombre = $_POST['nombre'];
    } else {
         print "Agrega un elemento valido1";
        $flag = true;
    } 

    if (isset($_POST['email']) && !empty($_POST['email'])){
        $email = $_POST['email'];
    } else {
        print "Agrega un elemento valido2";
       $flag = true;
   } 

    if (isset($_POST['tel']) && !empty($_POST['tel'])){
        $tel = $_POST['tel'];
    } else {
        print "Agrega un elemento valido3";
        $flag = true;
    } 

    if (isset($_POST['mensaje']) && !empty($_POST['mensaje'])){
        $mensaje = $_POST['mensaje'];
    } else {
        print "Agrega un elemento valido";
       $flag = true;
    } 

    if ($flag == True && !is_numeric($tel)) {
        echo 'Es necesario rellenar todos los datos del formulario con datos validos';
        echo "<a href='Ejercicio2.php'>Volver al formulario</a>";
    } else {
        echo "<p>El mensaje \"$mensaje\" fue eviado por $nombre, teléfono $tel.</p>
        <p>Su email es: $email</p>
       <p>Enviado la fecha: $fecha</p>";
    } 

    $opciones[] = $_POST['opciones'];

    foreach ($opciones as $opcion){
        print implode($opcion);
    }
?>