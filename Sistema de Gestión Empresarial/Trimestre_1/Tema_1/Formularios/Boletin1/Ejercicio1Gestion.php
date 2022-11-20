<?php 
    $precioTotal = 0;
    $flag = false;

    if (isset($_POST['precio']) && !empty($_POST['precio'])){
        $precio = $_POST['precio'];
        //$precio = inval($_POST['precio']); // ? Esto tambien lo convierte en numero
    } else {
        print "Agrega un elemento valido";
        $flag = true;
    }

    if (isset($_POST['cantidad']) && !empty($_POST['cantidad'])){
        $cantidad = $_POST['cantidad'];
    } else {
        print "Agrega un elemento valido";
        $flag = true;
    }

    if (isset($_POST['descuento']) ){
        $descuento = $_POST['descuento'];
    } else {
        print "Agrega un elemento valido";
        $flag = true;
    }

    if (isset($_POST['iva']) && !empty($_POST['iva'])){
        $iva = $_POST['iva'];
    } else {
        print "Agrega un elemento valido";
        $flag = true;
    }

    if (isset($_POST['coste'])){
        $envio = $_POST['coste'];
    } else {
        print "Agrega un elemento valido";
        $flag = true;
    }

    switch($envio){
        case strcmp($envio, "tienda"):
            $precioEnvio = 0;
            break;
        case strcmp($envio, "correos"):
            $precioEnvio = 5;
            break;
        case strcmp($envio, "seur"):
            $precioEnvio = 8;
            break;
    }

    $precioTotal = (((float)$precio + ((float)$precio * (float)$iva)) - (float)$descuento) * ((float)$cantidad + (float)$precioEnvio);

    if ($flag == True) {
        echo "<p>Hay un error en los datos</p>";
    } else {
        echo "<p>El precio del envio es: $precioTotal</p>";
    }
?>