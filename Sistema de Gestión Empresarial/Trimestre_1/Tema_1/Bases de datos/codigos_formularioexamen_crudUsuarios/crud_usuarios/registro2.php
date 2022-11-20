<?php
            $dbc = mysqli_connect('localhost', 'root');
            mysqli_select_db($dbc, 'usuariosbd');

            $problema=FALSE;

            if (!empty($_POST['nombre']) && !empty($_POST['apellido'])&& !empty($_POST['email'])) {
                $nombre = trim($_POST['nombre']);
                $apellido = trim($_POST['apellido']);
				$email = trim($_POST['email']);
            } else {
                print '<p style="color:red;">Por favor introduzca un nombre, un apellido y un correo </p>';
                $problema = TRUE;
            }

            $query = 'SELECT * FROM usuarios';
            $r=mysqli_query($dbc,$query);
            if ($r = mysqli_query($dbc, $query)) {
                if(empty($r)){
                    echo "No hay usuarios registrados actualmente";
                }else{
                    while ($fila = mysqli_fetch_array($r)) {
                        if(($fila['Nombre']==$nombre) && ($fila['Apellido']==$apellido)){
                            echo "Ya existe un usuario con ese nombre";
                            $problema=TRUE;
                            break;
                        }elseif($fila['Email']==$email){
                            echo "Ya hay un usuario con ese mismo correo";
                            $problema=TRUE;
                            break;
                        }
                    }
                }
            } else { //No se ha ejecutado la consulta             
                print '<p style="color:red;">No ha sido posible recuperar la entrada porque: <br/>' . mysqli_error($dbc) . '</p><p>El query que se estaba ejecutando era' . $query . '</p>';
            }
            //Validamos los datos del formulario             
            if (!$problema) {
//Definimos los datos a introducir                
                $query = "INSERT INTO usuarios (id,Nombre, Apellido,Email) VALUES (0,'$nombre', '$apellido', '$email')";
                //Ejecutar la consulta                 

                if (mysqli_query($dbc, $query)) {
                    print '<p> Entrada añadida</p>';
                } else {
                    print '<p style="color:red;">No ha sido posible añadir la entrada porque: <br/>' .
                            mysqli_error($dbc) . '</p><p>El query que se estaba ejecutando era' . $query . '</p>';
                }
            }
//todo OK            
            mysqli_close($dbc);

		
?>