<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cambio de Usuario</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="container">
        <h1>Cambio de Usuario</h1>
        <form action="realiza_cambio.php" method="POST">
            <label for="id">Id:</label>
            <input type="text" id="id" name="id" required>

            <label for="usuario">Cambio de Usuario:</label>
            <input type="usuario" id="usuario" name="usuario" required>

            <label for="password">Cambio de Contraseña:</label>
            <input type="password" id="password" name="password" required>

            <button type="submit" style=background-color:darkblue>Modificar Usuario</button>
        </form>
    </div>
</body>
</html>
