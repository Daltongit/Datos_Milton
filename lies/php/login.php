<?php
$servername = "localhost";
$username = "dalton"; // Cambia esto si tu usuario de MySQL es diferente
$password = "root"; // Cambia esto si tu contraseña de MySQL es diferente
$dbname = "liesof";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Obtener datos del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST['login-username'];
    $pass = $_POST['login-password'];

    // Preparar y ejecutar la consulta
    $stmt = $conn->prepare("SELECT * FROM users WHERE username = ? AND password = ?");
    $stmt->bind_param("ss", $user, $pass);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        echo "Inicio de sesión exitoso";
        // Aquí puedes redirigir al usuario a otra página
    } else {
        echo "Usuario o contraseña incorrectos";
    }

    $stmt->close();
}

$conn->close();
?>
