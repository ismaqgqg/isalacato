<?php
// Conexión a la base de datos
$servername = "localhost";  // Cambia si tienes un servidor diferente
$username = "root";         // Cambia si usas un usuario diferente
$password = "";             // Si no tienes contraseña, déjalo vacío
$dbname = "formulario_principal";  // Asegúrate de que el nombre de la base de datos sea correcto

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}



// Cerrar la conexión
$conn->close();
?>
