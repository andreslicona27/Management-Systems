<?php
 require_once("../Modelo/Modelo.php");
 $empleado = new Empleado();
 $datos = $empleado->getEmpleado();
 require_once("../Vista/Vista.php");
?>