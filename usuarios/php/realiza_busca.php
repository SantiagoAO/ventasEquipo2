<?php
require 'conexion.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];

    try {
        $stmt = $pdo->prepare("SELECT * FROM usuarios WHERE id = ?");
        $stmt->execute([$id]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        
        $_SESSION['usuario_usuario'] = $user['usuario'];
        $_SESSION['usuario_password'] = $user['password'];

        header("Location: cambio.php?usuario=" . urlencode($user['usuario']) . "&password=" . urlencode($user['password']));
    } catch (PDOException $e) {
        echo "<p>Error al dar de baja usuario: " . $e->getMessage() . "</p>";
        
    }
}
?>
