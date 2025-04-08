<?php
require 'conexion.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = $_POST['nombre'];
    $usuario = $_POST['usuario'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

    try {
        $stmt = $pdo->prepare("INSERT INTO usuarios (nombre, usuario, email, contraseña) VALUES (?, ?, ?, ?)");
        $stmt->execute([$nombre, $usuario, $email, $password]);

        echo "<p>Usuario registrado exitosamente.</p>";
        echo "<a href='../index.php'>Volver al inicio</a>";
    } catch (PDOException $e) {
        echo "<p>Error al registrar usuario: " . $e->getMessage() . "</p>";
    }
}
?>
