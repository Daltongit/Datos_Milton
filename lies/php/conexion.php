<?php
$servername = "localhost";
$username = "dalton"; // Cambia esto si tu usuario es diferente
$password = "root";     // Cambia esto si tu contraseña es diferente
$dbname = "liesof";  // Tu base de datos

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>
