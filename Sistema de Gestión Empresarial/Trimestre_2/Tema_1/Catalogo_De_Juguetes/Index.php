<?php
if (
    (isset($_POST['id'])) && ($_POST['id'] != '') &&
    (isset($_POST['nombre'])) && ($_POST['nombre'] != '') &&
    (isset($_POST['precio'])) && ($_POST['precio'] != '') &&
    (isset($_POST['imagen'])) && ($_POST['imagen'] != '') &&
    (isset($_POST['descripcion'])) && ($_POST['descripcion'] != '') &&
    (isset($_POST['stock'])) && ($_POST['stock'] != '')
) {
    require_once "Modelo/Modelo.php";
    $nuevo = new Juguete();
    $asd = $nuevo->setJuguete(
        $_POST['id'], $_POST['nombre'], $_POST['precio'],
        $_POST['imagen'], $_POST['descripcion'], $_POST['stock']
    );
}
?>

<!DOCTYPE html>

<head>
    <title>Catalogo</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="index.css">
</head>

<body>
    <h1>Mundo de Juguetes</h1>
    <ul>
        <li>
            <a href="Muestra_Juguetes.php">
                <span class="toys">CAT</span>
            </a>
        </li>
    </ul>


    <div class="container">
        <div class="carousel">
            <div class="image"><span>Vive</span></div>
            <div class="image"><span>en el</span></div>
            <div class="image"><span>mundo</span></div>
            <div class="image"><span>de los</span></div>
            <div class="image"><span>sueños</span></div>
            <div class="image"><span>con</span></div>
            <div class="image"><span>los</span></div>
            <div class="image"><span>mejores</span></div>
            <div class="image"><span>juguetes</span></div>
        </div>
    </div>

</body>


</html>