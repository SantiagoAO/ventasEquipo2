<?php
require 'conexion.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuario = $_POST['usuario'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $id = $_POST['id'];

    try {
        
        $stmt = $pdo->prepare("UPDATE usuarios SET usuario = ?, contraseña = ? WHERE id = ?");
        $stmt->execute([$usuario, $password, $id]);

        echo "<p>Usuario modificado exitosamente.</p>";
        echo "<a href='../index.php'>Volver al inicio</a>";
    } catch (PDOException $e) {
        echo "<p>Error al registrar usuario: " . $e->getMessage() . "</p>";
    }
}
?>
