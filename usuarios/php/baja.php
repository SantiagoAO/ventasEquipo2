<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Baja de Usuario</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="container">
        <h1>Baja de Usuario</h1>
        <form action="realiza_baja.php" method="POST">
            <label for="id">Id:</label>
            <input type="text" id="id" name="id" required>

            <button type="submit" style=background-color:darkred>Dar de Baja</button>
        </form>
    </div>
</body>
</html>
