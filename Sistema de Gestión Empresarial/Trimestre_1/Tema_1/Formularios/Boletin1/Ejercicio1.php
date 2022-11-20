<!DOCTYPE html>
    <head>
        <title>Ejercicio 1</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
    </head>
    <body>
        <h2>Rellena el siguiente formulario para calcular el coste total del envio</h2>
        <form action="Ejercicio1Gestion.php" method="post">
            Precio: <input type="text" name="precio" size="5"/> </br>
            Cantidad: <input type="text" name="cantidad" size="5"/> </br>
            Descuento: <input type="text" name="descuento" size="5"/> </br>
            IVA: <input type="text" name="iva" size="3"/> % </br>
            
            Método de envío: <select name="coste"> 
                <option value="tienda">Recoger en tienda -> coste 0</option>
                <option value="correos">Correos -> coste 5</option>
                <option value="seur">Seur -> coste 8</option>
            </select> </br>

            <input type="submit" name="boton" value="Calcular Precio Total"/>
        </form>
    </body>
</html>