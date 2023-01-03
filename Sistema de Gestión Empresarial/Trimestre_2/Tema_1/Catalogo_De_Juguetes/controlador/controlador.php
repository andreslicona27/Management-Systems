<?php
 require_once("../Modelo/Modelo.php");
 $Juguete = new Juguete();
 $datos = $Juguete->getJuguete();
 require_once("../Vista/Vista.php");
?>