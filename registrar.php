<?php
// Configuración de la base de datos
$servername = "localhost"; // Cambia esto si tu servidor es diferente
$username = "josue"; // Cambia esto por tu usuario de la base de datos
$password = "56783Josue"; // Cambia esto por tu contraseña de la base de datos
$dbname = "jcellstore";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Obtener datos del formulario
$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];
$problema = $_POST['problema'];
$fecha = $_POST['fecha'];
$hora = $_POST['hora'];

// Preparar y vincular
$stmt = $conn->prepare("INSERT INTO contacto (nombre, telefono, correo, problema, fecha, hora) VALUES (?, ?, ?, ?, ?, ?)");
if ($stmt === false) {
    die('prepare() failed: ' . htmlspecialchars($conn->error));
}
$stmt->bind_param("ssssss", $nombre, $telefono, $correo, $problema, $fecha, $hora);

// Ejecutar la consulta
if ($stmt->execute()) {
    echo " ";
} else {
    echo "Error: " . $stmt->error;
}

// Cerrar la conexión
$stmt->close();
$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Datos Enviados</title>
    <style>
        /* Estilos CSS */
    </style>
</head>
<body>
    <div class="container">
        <h1>Datos Enviados</h1>
        
        <table>
            <tr>
                <th>Nombre</th>
                <td><?php echo htmlspecialchars($nombre); ?></td>
            </tr>
            <tr>
                <th>Teléfono</th>
                <td><?php echo htmlspecialchars($telefono); ?></td>
            </tr>
            <tr>
                <th>Correo</th>
                <td><?php echo htmlspecialchars($correo); ?></td>
            </tr>
            <tr>
                <th>Problema</th>
                <td><?php echo htmlspecialchars($problema); ?></td>
            </tr>
            <tr>
                <th>Fecha</th>
                <td><?php echo htmlspecialchars($fecha); ?></td>
            </tr>
            <tr>
                <th>Hora</th>
                <td><?php echo htmlspecialchars($hora); ?></td>
            </tr>
        </table>

        <div class="button-container">
            <a href="contact.php" class="btn">Regresar</a>
        </div>
    </div>
</body>
</html>