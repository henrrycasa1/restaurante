<?php

$host = 'localhost'; //  host
$dbname = 'restaurante'; // nombre de la base de datos
$username = 'root';


// Conexión a la base de datos
try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Error de conexión: " . $e->getMessage();
}

// Procesar los datos del formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtener datos del formulario
    $nombre = $_POST['nombre'];
    $ap_paterno = $_POST['ap_paterno'];
    $ap_materno = $_POST['ap_materno'];
    $contrasena = password_hash($_POST['contrasena'], PASSWORD_DEFAULT); // Encriptar la contraseña

    // Insertar datos en la base de datos
    try {
        $sql = "INSERT INTO usuarios (nombre, ap_paterno, ap_materno, contrasena) VALUES (:nombre, :ap_paterno, :ap_materno, :contrasena)";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':nombre', $nombre);
        $stmt->bindParam(':ap_paterno', $ap_paterno);
        $stmt->bindParam(':ap_materno', $ap_materno);
        $stmt->bindParam(':contrasena', $contrasena);
        
        // Ejecutar la consulta
        $stmt->execute();

        echo "Usuario registrado con éxito.";
        header('Location: login.php'); // Redirigir al login después del registro
        exit;
    } catch (PDOException $e) {
        echo "Error al registrar usuario: " . $e->getMessage();
    }
}
?>
