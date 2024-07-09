<?php

include("Conexion.php");


if(isset($_POST['Enviar'])){

    if(

        strlen($_POST['nombre']) >= 1 &&
        strlen($_POST['email']) >= 1 &&
        strlen($_POST['mensaje']) >= 1 
        
    )
    {

        $nombre = trim($_POST['nombre']);
        $email = trim($_POST['email']);
        $mensaje = trim($_POST['mensaje']);

        $consulta = "INSERT INTO buzon (nombre, email, mensaje)
                    VALUE ('$nombre','$email','$mensaje')";

        $resultado = mysqli_query($conn, $consulta);

    }
}


?>