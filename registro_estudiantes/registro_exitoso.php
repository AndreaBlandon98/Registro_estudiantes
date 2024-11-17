<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro Exitoso</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <div class="container">
        <div class="message-box">
            <h1>¡Registro Exitoso!</h1>

            <?php
            if (isset($_SESSION['message'])) {
                $message = $_SESSION['message'];
                $message_type = $_SESSION['message_type'];
                echo "<p class=\"$message_type\">$message</p>";
                unset($_SESSION['message']);
                unset($_SESSION['message_type']);
            }
            ?>

            <div class="options">
                <a href="index.php" class="btn">Realizar otro registro</a>
                <a href="ver_registros.php" class="btn">Ver registros</a>
            </div>
        </div>
    </div>
</body>
</html>
