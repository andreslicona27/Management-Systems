<?php
$problema = false;
if (!empty($_POST['nombre']) && !empty($_POST['precio']) && !empty($_POST['imagen'] && !empty($_POST['descripcion']) && !empty($_POST['stock']))) {
    $nombre = trim($_POST['nombre']);
    $precio = trim($_POST['precio']);
    $imagen = trim($_POST['imagen']);
    $descripcion = trim($_POST['descripcion']);
    $stock = trim($_POST['stock']);

    require_once "Modelo/Modelo.php";
    $nuevo = new Juguete();
    $asd = $nuevo->setJuguete(
        $_POST['nombre'],
        $_POST['precio'],
        $_POST['imagen'],
        $_POST['descripcion'],
        $_POST['stock']
    );

} else {
    print "<p style = \"color:red;\">Debe introducir todos los datos que se le solicitan</p>";
    $problema = true;
}

?>

<!DOCTYPE html>

<head>
    <title>Nuevo Juguete</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/Insertar_Juguete.css" rel="stylesheet" type="text/css">
</head>

<body>
    <div class="login-box">
        <h2>Datos del Juguete</h2>
        <form action="Insertar_Juguete.php" method="post">
            <div class="type-one">
                <div class="user-box">
                    <input type="text" name="nombre" size="15" required>
                    <label>Nombre</label>
                </div>
                <div class="user-box">
                    <input type="text" name="precio" size="15" required>
                    <label>Precio</label>
                </div>
                <div class="user-box">
                    <input type="text" name="imagen" size="15" required>
                    <label>Imagen</label>
                </div>

                <div class="user-box">
                    <input type="text" name="descripcion" required>
                    <label>Descripcion</label>
                </div>
                <div class="user-box">
                    <input type="text" name="stock" required>
                    <label>Stock</label>
                </div>
            </div>

            <div class="button-form">
                <a href="Vista.php">inicio</a>
                <input type="submit" id="submit" value="Agregar Juguete">
            </div>
        </form>
    </div>
</body>

</html>