<?php
require 'conexion.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];

    try {
        $stmt = $pdo->prepare("DELETE FROM usuarios WHERE id = ?");
        $stmt->execute([$id]);

        echo "<p>Usuario dado de baja exitosamente.</p>";
        echo "<a href='../index.php'>Volver al inicio</a>";
    } catch (PDOException $e) {
        echo "<p>Error al dar de baja usuario: " . $e->getMessage() . "</p>";
    }
}
?>
