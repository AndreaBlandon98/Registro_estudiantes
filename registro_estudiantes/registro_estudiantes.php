<?php

include('includes/conexion.php');


if (isset($_GET['success'])) {
    echo "<h2>¡Registro exitoso!</h2>";
    echo "<p>Los datos del estudiante se han registrado correctamente.</p>";
    echo "<a href='index.php'>Registrar otro estudiante</a>";
} elseif (isset($_GET['error'])) {
    echo "<h2>Error en el registro</h2>";
    echo "<p>" . htmlspecialchars($_GET['error']) . "</p>";
    echo "<a href='index.php'>Intentar nuevamente</a>";
} else {
    
    header("Location: index.php");
    exit;
}
?>
