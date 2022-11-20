<?php 
    require_once "Vehiculo.php";
    require_once "Cuatro_ruedas.php";
    require_once "Dos_ruedas.php";
    require_once "Coche.php";
    require_once "Camion.php";

    $coche = new Coche("verde",1400,4);
    $coche->anadir_persona(65);
    $coche->anadir_persona(65);
    Vehiculo::ver_atributo($coche);
    $coche->anadir_cadenas_nieve(2);
    $coche->setColor("rojo");
    Vehiculo::ver_atributo($coche);


?>