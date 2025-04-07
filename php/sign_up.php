<?php
session_start();
require_once '../php/conexion.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = $_POST['nombre'];
    $usuario = $_POST['usuario'];
    $password = $_POST['contraseña'];

    try {
        // Verificar si el usuario ya existe
        $stmt = $pdo->prepare("SELECT COUNT(*) FROM usuarios WHERE usuario = :usuario");
        $stmt->execute(['usuario' => $usuario]);
        $count = $stmt->fetchColumn();

        if ($count > 0) {
            echo "<script>alert('El usuario ya existe, intenta otro.'); window.location.href='../sign_up.html';</script>";
            exit;
        }
        
        $stmt = $pdo->query("SELECT MAX(id) FROM usuarios");
        $max_id = $stmt->fetchColumn();

        $id = $max_id + 1;

        $contraseña = password_hash($password, PASSWORD_DEFAULT);
        $stmt = $pdo->prepare("INSERT INTO usuarios (id, nombre, usuario, contraseña) VALUES (:id, :nombre, :usuario, :contrasena)");
        $stmt->execute(['id' => $id, 'nombre' => $nombre, 'usuario' => $usuario, 'contrasena' => $contraseña]);

        echo "<script>alert('Usuario creado correctamente.'); window.location.href='../index.html';</script>";
        exit;

    } catch (PDOException $e) {
        die("Error: " . $e->getMessage());
    }
}
?>