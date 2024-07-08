<?php
$servername = 'localhost';  // e.g., 'localhost' or '127.0.0.1'
$username = "root";  // Tu nombre de usuario
$password = "";  // Tu contraseña
$dbname = "contactos";  // Nombre de tu base de datos

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
echo "Conectado exitosamente a MySQL";

// Verificar la base de datos
$sql = "SELECT DATABASE()";
$result = $conn->query($sql);
$row = $result->fetch_row();
echo " Conectado a la base de datos: " . $row[0];

// Cerrar la conexión
$conn->close();
?>
