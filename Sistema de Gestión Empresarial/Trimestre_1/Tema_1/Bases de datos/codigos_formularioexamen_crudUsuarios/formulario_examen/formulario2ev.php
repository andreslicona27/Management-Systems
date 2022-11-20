<?php

error_reporting(E_ALL ^ E_NOTICE);
echo "<h2>Datos del subscriptor:</h2><br>";

if(empty($_POST['nombre'])){
    echo "<span style='color:red;'>Es necesario que introduzca su nombre<br>";
    echo "este campo es obligatorio</span><br>";
}else{
    $nombre=$_POST['nombre'];
}
if(empty($_POST['apellido1'])){
    echo "<span style='color:red;'>Es necesario que introduzca su primer apellido<br>";
    echo "este campo es obligatorio</span><br>";
}else{
    $apellido1=$_POST['apellido1'];
}
if(empty($_POST['apellido2'])){
    echo "<span style='color:red;'>Es necesario que introduzca su segundo apellido<br>";
    echo "este campo es obligatorio</span><br>";
}else{
    $apellido2=$_POST['apellido2'];
}
if(empty($_POST['correo'])){
    echo "<span style='color:red;'>Es necesario que introduzca su correo<br>";
    echo "este campo es obligatorio</span><br>";
}else{
    $correo=$_POST['correo'];
}

echo "Nombre: ".$nombre."<br>";
echo "Primer Apellido: ".$apellido1."<br>";
echo "Segundo Apellido: ".$apellido2."<br>";

if($_POST['info']=='si'){
    echo "<br>Le enviaremos información relacionada con nuestras publicaciones al correo ".$correo."<br>";
}else{
    echo "Correo Electrónico: ".$correo."<br><br>";
    echo "No le enviaremos información relacionada con las publicaciones<br>";
}

echo "<h2>Datos de la subscripción:</h2><br>";
echo "Señor/a ".$apellido1.".Estas son las publicaciones a las que se ha subscrito: <br>";
$publicaciones=$_POST['publicaciones'];
foreach ($publicaciones as $valor){
    echo "<strong>$valor</strong><br>";
}

$numero_publicaciones= count($publicaciones);

if($_POST['subscripcion']=="semanal"){
    if($numero_publicaciones==1){
       echo "Su tarifa semanal es de 6 euros"; 
    }else if($numero_publicaciones==2){
        echo "Su tarifa semanal es de 10 euros";
    }else if($numero_publicaciones==3){
        echo "Su tarifa semanal es de 15 euros";
    }else{
        echo "Su tarifa semanal es de 22 euros";
    }
}
if($_POST['subscripcion']=="mensual"){
    if($numero_publicaciones==1){
       echo "Su tarifa mensual es de 24 euros"; 
    }else if($numero_publicaciones==2){
        echo "Su tarifa mensual es de 40 euros";
    }else if($numero_publicaciones==3){
        echo "Su tarifa mensual es de 60 euros";
    }else{
        echo "Su tarifa mensual es de 80 euros";
    }
}
if($_POST['subscripcion']=="anual"){
    if($numero_publicaciones==1){
       echo "Su tarifa anual es de 270 euros"; 
    }else if($numero_publicaciones==2){
        echo "Su tarifa anual es de 450 euros";
    }else if($numero_publicaciones==3){
        echo "Su tarifa anual es de 700 euros";
    }else{
        echo "Su tarifa anual es de 950 euros";
    }
}





