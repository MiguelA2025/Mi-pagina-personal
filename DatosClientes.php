<?php

if(isset($_POST["nombre"],$_POST["email"],$_POST["mensaje"])
and $_POST["nombre"] != "" and
$_POST["email"] != "" and $_POST["mensaje"] != "")
{
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $mensaje = $_POST["mensaje"];

    $consulta = "INSERT INTO buzon(nombre,email,mensaje) 
    VALUES('$nombre','$email','$mensaje')";
}else{
    echo'<p>Completa el formulario joder<p/>';
}
?>