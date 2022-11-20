<?php 
    $flag = false;
    if (isset($_POST['tratamiento']) && !empty($_POST['tratamiento'])){
        $tratamiento = $_POST['tratamiento'];
    } else {
        print "Agrega un elemento valido";
        $flag = true;
    }

    if (isset($_POST['nombre']) && !empty($_POST['nombre'])){
        $nombre = $_POST['nombre'];
    } else {
        print "Agrega un elemento valido";
        $flag = true;
    }

    if (isset($_POST['email']) && !empty($_POST['email'])){
        $email = $_POST['email'];
    } else {
        print "Agrega un elemento valido";
        $flag = true;
    }

    if (isset($_POST['respuesta']) && !empty($_POST['respuesta'])){
        $respuesta = $_POST['respuesta'];
    } else {
        print "Agrega un elemento valido";
        $flag = true;
    }

    if (isset($_POST['comentarios']) && !empty($_POST['comentarios'])){
        $comentarios = $_POST['comentarios'];
    } else {
        print "Agrega un elemento valido";
        $flag = true;
    }

    if (isset($_POST['enviar']) && !empty($_POST['enviar'])){
        $enviar = $_POST['enviar'];
    } else {
        print "Agrega un elemento valido";
        $flag = true;
    }

    if ($flag == True) {
        echo 'Es necesario rellenar todos los datos del formulario';
        echo "<a href='form.html'>Volver al formulario</a>";
    } else {
        echo "<p>Gracias, $tratamiento $nombre por sus comentarios</p>
        <p>Con email: $email</p>
       <p>Su valoración $respuesta y sus comentarios $comentarios serán tenidos en cuenta</p>";
    } 

    $opciones[] = $_POST['opciones'];

    foreach ($opciones as $opcion){
        print implode($opcion);
    }
?>